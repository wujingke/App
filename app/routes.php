<?php

Route::get('/', function()
{
	return View::make('topics.index');
});

Route::get('login', function() {
	Auth::login(User::find(1));
});