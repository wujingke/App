<?php

class RelationshipController extends BaseController {

	public function follow()
	{
		if (Request::ajax()) {
			return $this->toggle();
		}

		return '503';
	}

	public function unfollow()
	{
		if (Request::ajax()) {
			return $this->toggle();
		}

		return '503';
	}

	private function toggle()
	{
		if ($this->targetUser() && ($this->targetUser()->id != Auth::user()->id)) {
			$relationship = $this->isFollowing(Auth::user(), $this->targetUser());
			if ($relationship) {
				$relationship->delete();
				return Response::json(array('success'=>true, 'relationship'=>Lang::get('page.follow')));
			} else {
				$relationship = new Relationship;
				$relationship->follower_id = Auth::user()->id;
				$relationship->followed_id = $this->targetUser()->id;
				$relationship->save();
				return Response::json(array('success'=>true, 'relationship'=>Lang::get('page.unfollow')));
			}
		}
		return Response::json(array('success'=>false));
	}

	private function targetUser()
	{
		if (Input::has('target')) {
			$user = User::whereUsername(Input::get('target'))->first();
			return $user ? $user : false;
		}
		return false;
	}

	private function isFollowing($authUser, $targetUser)
	{
		$relationship = Relationship::whereFollower_id($authUser->id)
			->whereFollowed_id($targetUser->id)
			->first();
		return $relationship ? $relationship : false;
	}

}
