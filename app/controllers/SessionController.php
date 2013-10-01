<?php

class SessionController extends BaseController {

	public function create()
	{
		return View::make('users.login');
	}

	public function store()
	{
		$authenticator = array(
			'email'    => Input::get('username'),
			'password' => Input::get('password')
		);

		$v = Validator::make(array('email'=>$authenticator['email']), array('email'=>'required|email'));

		if ($v->fails()) {

			$user = User::whereUsername(Input::get('username'))->first();
			
			if (!$user) {
				return Redirect::back()
					->with('message', Lang::get('page.user_inexistence'))
					->withInput(Input::except('password'));
			}

			$authenticator['email'] = $user->email;
		}

		if (Auth::attempt($authenticator, Input::has('remember') ? true : false)) {
			return Redirect::to('/');
		}

		return Redirect::back()
			->with('message', Lang::get('page.password_incorrect'))
			->withInput(Input::except('password'));
	}

	public function destroy()
	{
		if (Auth::check()) {
			Auth::logout();
		}
		return Redirect::to('/');
	}

	public function reminderCreate()
	{
		return View::make('users.reminder');
	}

}