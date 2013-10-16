<?php

class RelationshipController extends BaseController {

	public function toggle()
	{
		if (Request::ajax()) {

			$username = Input::has('target') ? Input::get('target') : '';

			$user = User::whereUsername($username)->first();

			if ($user && Auth::check()) {

				if ($this->is_following($user)) {

					$relationship = Relationship::whereFollowed_id($user->id)
						->whereFollower_id(Auth::user()->id)->first();
					if ($relationship) {
						$relationship->delete();
					}

					$this->unfollow($user);
					return Response::json(array('to'=>Lang::get('app.follow'), 'url'=>URL::to('user/follow?target=' . $user->username)));
				}

				$relationship = new Relationship;
				$relationship->followed_id = $user->id;
				$relationship->follower_id = Auth::user()->id;
				$relationship->save();

				$this->follow($user);
				return Response::json(array('to'=>Lang::get('app.unfollow'), 'url'=>URL::to('user/unfollow?target=' . $user->username)));
			}

		}

		App::abort(404, 'Page not found');
	}

	public function relationship($username)
	{

		$user = User::whereUsername($username)->first();

		if ($user && Request::ajax() && Auth::check()) {

			if ($user->id != Auth::user()->id) {

				if ($this->is_following($user)) {

					return Response::json(array('to'=>Lang::get('app.unfollow'), 'url'=>URL::to('user/unfollow?target=' . $user->username)));
				}

				return Response::json(array('to'=>Lang::get('app.follow'), 'url'=>URL::to('user/follow?target=' . $user->username)));
			}

			return Response::json(array('to'=>Lang::get('app.edit'), 'url'=>URL::to('settings')));
		}

		App::abort(404, 'Page not found');
	}

	private function follow($user)
	{
		Redis::sadd('user:' . $user->id . ':followers', Auth::user()->id);
		Redis::sadd('user:' . Auth::user()->id . ':following', $user->id);
	}

	private function unfollow($user)
	{
		Redis::srem('user:' . $user->id . ':followers', Auth::user()->id);
		Redis::srem('user:' . Auth::user()->id . ':following', $user->id);
	}

	private function is_following($user)
	{
		return Redis::sismember('user:' . Auth::user()->id . ':following', $user->id);
	}

	private function is_followed_by($user)
	{
		return Redis::sismember('user:' . Auth::user()->id . ':followers', $user->id);
	}

	private function followers_count($user)
	{
		return Redis::scard('user:' . $user->id . ':followers');
	}

	private function following_count($user)
	{
		return Redis::scard('user:' . $user->id . ':following');
	}
}
