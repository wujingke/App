<?php

Route::get('/', function()
{
	return View::make('topics.index')
		->with('topics', Topic::all());
});

Route::get('login', function() {
	Auth::login(User::find(1));
});




Route::post('session/store', array('uses'=>'SessionController@store'));

Route::get('logout', array('uses'=>'SessionController@destroy'));

Route::get('t/{id}', array('as'=>'topic', 'uses'=>'TopicController@show'));

Route::get('~master', array('as'=>'master', 'uses'=>'MasterController@index'));

Route::post('~master/node/store', array('uses'=>'MasterController@nodeStore'));