<?php

class NotificationController extends BaseController {

	public function index()
	{
		return View::make('notifications.index')
			->with('notifications', Auth::user()->notifications);
	}

}