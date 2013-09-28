<?php

class UserController extends BaseController {

	public function edit()
	{
		//return View::make('users.edit');
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

	}

	public function profileIndex()
	{
		return Redirect::to('settings/profile');
	}

	public function profileEdit()
	{
		return View::make('profiles.edit');
	}

	public function profileUpdate()
	{

	}

}