<?php

class SessionController extends BaseController {

	public function create()
	{
		return View::make('users.login');
	}

	public function store()
	{
		$user = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);
		if (Auth::attempt($user, Input::has('remember') ? true : false)) {
			return Redirect::to('/');
		}

	}

	public function destroy()
	{
		if (Auth::check()) {
			Auth::logout();
		}
		return Redirect::to('/');
	}

}