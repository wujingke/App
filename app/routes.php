<?php

Route::get('/', function()
{
	return View::make('topics.index');
});