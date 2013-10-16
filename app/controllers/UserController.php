<?php

class UserController extends BaseController {

	public function __construct()
	{
		$this->beforeFilter('auth', array('except'=>array('create', 'store', 'show')));

		$this->beforeFilter('csrf', array('on'=>'post'));
	}

	public function edit()
	{
		return View::make('users.edit');
	}

	public function show($username)
	{
		$user = User::whereUsername($username)->first();
		
		if ($user) {
			if (!Request::segment(3)) {
				return View::make('users.personal.index')
					->with('user', $user);
			}

			return View::make('users.personal.' . Request::segment(3))
				->with('user', $user);
		}

		return App::abort(404);
	}

	public function create()
	{
		return View::make('users.create');
	}

	public function store()
	{
		$v = Validator::make(Input::all(), array(
			'username' => 'required|alpha_dash|unique:users|min:4|max:32',
			'email'    => 'required|email|unique:users',
			'password' => 'required|alpha_dash|between:6,16',
		));

		if ($v->fails()) {
			return Redirect::back()
				->withErrors($v)
				->withInput();
		}

		$user = new User;

		$user->username = Input::get('username');
		$user->email    = Input::get('email');
		$user->password = Hash::make(Input::get('password'));

		if ($user->save()) {

			$profile = new Profile;
			$profile = $user->profile()->save($profile);

			Auth::login($user);
			return Redirect::home()
				->with('suggestion', '');
		}

		return Redirect::back()
			->with('message', '');
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
				->with('message', Lang::get('app.update_successfully'));
		}

		return Redirect::back()
			->with('message', Lang::get('app.current_password_incorrect'));
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
			->with('message', Lang::get('app.update_successfully'));
	}

	public function editAvatar()
	{
		return View::make('profiles.avatar');
	}

	public function uploadAvatar()
	{
		$avatarFile = Input::file('avatar');

		$v = Validator::make(array('avatar'=>$avatarFile), array('avatar'=>'mimes:png'));

		if ($v->fails()) {
			return Redirect::back()
				->with('message', Lang::get('app.file_unsupported'));
		}

		$avatarFileName = sha1(str_random(40)) . '.' . $avatarFile->getClientOriginalExtension();
		$avatarFolderName = sha1(str_random(40));
		
		$success = $avatarFile->move(public_path() . '/uploads/' . $avatarFolderName, $avatarFileName);

		if ($success) {
			$profile = Auth::user()->profile;
			$profile->avatar_url = 'uploads/' . $avatarFolderName . '/' . $avatarFileName;
			$profile->save();
		}

		return Redirect::back();
	}

	public function updateAvatar()
	{
		$src = public_path() . '/' . Auth::user()->profile->avatar_url;

		$position = array(
			'x' => Input::get('x'),
			'y' => Input::get('y'),
			'w' => Input::get('w'),
			'h' => Input::get('h'),
		);

		$v = Validator::make(
			$position,
			array(
				'x' => 'required|alpha_num',
				'y' => 'required|alpha_num',
				'w' => 'required|alpha_num',
				'h' => 'required|alpha_num',
			)
		);

		if ($v->fails()) {
			
		}

		$avatar = $this->generateAvatar($src, $position, 128);

		if ($avatar) {
			$profile = Auth::user()->profile;
			$profile->avatar_square_url = $avatar;
			$profile->save();
		}

		return Redirect::back()
			->with('message', Lang::get('app.update_successfully'));
	}

	private function generateAvatar($src, $position, $size)
	{
		$avatar = ImageCreateTrueColor($size, $size);

		$output = 'avatars/' . sha1(str_random(32)) . '.png';

		imagecopyresampled($avatar, imagecreatefrompng($src), 0, 0, $position['x'], $position['y'], $size, $size, $position['w'], $position['h']);

		return imagepng($avatar, public_path() . '/' . $output) ? $output : false;
	}

}