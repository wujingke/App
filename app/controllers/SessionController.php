<?php

class SessionController extends BaseController {

    public function __construct()
    {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }

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
                return Redirect::to('login')
                    ->with('message', Lang::get('app.user_inexistence'))
                    ->withInput(Input::except('password'));
            }

            $authenticator['email'] = $user->email;
        }

        if (Auth::attempt($authenticator, Input::has('remember') ? true : false)) {
            return Redirect::home();
        }

        return Redirect::to('login')
            ->with('message', Lang::get('app.password_incorrect'))
            ->withInput(Input::except('password'));
    }

    public function destroy()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return Redirect::home();
    }

    public function reminderCreate()
    {
        return View::make('users.reminder');
    }

    public function reminderStore()
    {
        Mail::pretend();

        return Password::remind(array('email'=>Input::get('email')));
    }

    public function resetCreate($token)
    {
        return View::make('users.password_reset')->with('token', $token);
    }

    public function resetStore($token)
    {
        return Password::reset(array('email'=>Input::get('email')), function($user, $password)
        {
            $user->password = Hash::make($password);

            $user->save();

            return Redirect::home();
        });
    }

}