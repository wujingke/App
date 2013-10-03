<?php

use Symfony\Component\Yaml\Yaml;

class MasterController extends BaseController {

	public function __construct()
	{
		$this->beforeFilter('auth');

		$this->beforeFilter('csrf', array('on'=>'post'));

		$this->beforeFilter(function() {
			if (!$this->isAdmin(Auth::user())) {
				return '501';
			}
		});
	}

	public function index()
	{
		var_dump($this->isAdmin(Auth::user()));
	}

	private function isAdmin($user)
	{
		$emails = Yaml::parse(app_path() . '/config/app.yml')['defaults']['admin_emails'];
		return in_array($user->email, $emails);
	}
}