<?php

Route::get('/', function()
{
	return View::make('topics.index');
});

Route::get('login', function() {
	Auth::login(User::find(1));
});

Route::get('logout', function() {
	Auth::logout();
});


Route::post('session/store', array('uses'=>'SessionController@store'));