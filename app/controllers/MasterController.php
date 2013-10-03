<?php

use Symfony\Component\Yaml\Yaml;

class MasterController extends BaseController {

	public function index()
	{
		var_dump($this->isAdmin(Auth::user()));
	}

	public function nodeStore()
	{

	}

	private function isAdmin($user)
	{
		$emails = Yaml::parse(app_path() . '/config/app.yml')['defaults']['admin_emails'];
		return in_array($user->email, $emails);
	}

}