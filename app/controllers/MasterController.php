<?php

use Symfony\Component\Yaml\Yaml;

class MasterController extends BaseController {

	public function index()
	{
		//return View::make('master.index');
		return Yaml::parse(app_path() . '/config/app.yml');
	}

	public function nodeStore()
	{

	}

	private function isAdmin()
	{
		var_dump(Yaml::parse(app_path() . '/config/app.yml'));
	}

}