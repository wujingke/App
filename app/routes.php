<?php

Route::get('/', function()
{
	return View::make('topics.index');
});

Route::get('login', function() {
	Auth::login(User::find(1));
});




Route::post('session/store', array('uses'=>'SessionController@store'));

Route::get('logout', array('uses'=>'SessionController@destroy'));