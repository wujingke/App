<?php

class PageController extends BaseController {

	public function users()
	{
		return View::make('pages.users');
	}

	public function sites()
	{
		return View::make('pages.sites');
	}

	public function about()
	{
		return View::make('pages.about');
	}

	public function wiki()
	{
		return View::make('pages.wiki');
	}

}