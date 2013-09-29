<?php

class UserController extends BaseController {

	public function edit()
	{
		return View::make('users.edit');
	}

	public function show($username)
	{
		$user = User::whereUsername($username)->first();

		return View::make('users.show')
			->with('topics', $user->topics);
	}

	public function create()
	{
		return View::make('users.create');
	}

	public function store()
	{

	}

	public function update()
	{
		if (Hash::check(Input::get('current_password'), Auth::user()->password)) {
			$v = Validator::make(
				array(
					'password'              => Input::get('password'),
					'password_confirmation' => Input::get('password_confirmation'),
				),
				array(
					'password'              =>'required|alpha_dash|between:6,16|confirmed',
					'password_confirmation' =>'required|alpha_dash|between:6,16',
				)
			);

			if ($v->fails()) {
				return Redirect::back()
					->withErrors($v);
			}

			Auth::user()->password = Hash::make(Input::get('password'));

			Auth::user()->save();

			return Redirect::back()
				->with('message', Lang::get('page.update_successfully'));
		}

		return Redirect::back()
			->with('message', Lang::get('page.current_password_incorrect'));
	}

	public function profileIndex()
	{
		return Redirect::to('settings/profile');
	}

	public function profileEdit()
	{
		return View::make('profiles.edit')
			->with('profile', Auth::user()->profile);
	}

	public function profileUpdate()
	{
		$profile = Auth::user()->profile;

		$profile->nickname      = Input::get('nickname');
		$profile->location      = Input::get('location');
		$profile->website       = Input::get('website');
		$profile->company       = Input::get('company');
		$profile->contact_email = Input::get('contact_email');

		$profile->save();

		return Redirect::back()
			->with('message', Lang::get('page.update_successfully'));
	}

	public function uploadAvatar()
	{
		return View::make('profiles.avatar');
	}

}