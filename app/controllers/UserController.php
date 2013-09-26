<?php

class UserController extends BaseController {

	public function edit()
	{
		//return View::make('users.edit');
	}

	public function show()
	{

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