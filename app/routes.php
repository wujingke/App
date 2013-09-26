<?php

Route::get('/', array('uses'=>'TopicController@index'));

Route::get('login', array('uses'=>'SessionController@create'));

Route::get('signup', array('uses'=>'UserController@create'));

Route::post('session/store', array('uses'=>'SessionController@store'));

Route::get('logout', array('uses'=>'SessionController@destroy'));

Route::get('t/{id}', array('as'=>'topic', 'uses'=>'TopicController@show'));

Route::get('~master', array('as'=>'master', 'uses'=>'MasterController@index'));

Route::post('~master/node/store', array('uses'=>'MasterController@nodeStore'));

Route::get('settings', array('uses'=>'UserController@profileIndex'));

Route::get('settings/profile', array('uses'=>'UserController@profileEdit'));

Route::put('settings/profile', array('uses'=>'UserController@profileUpdate'));

Route::put('settings/password', array('uses'=>'UserController@update'));

Route::get('~users', array('uses'=>'PageController@users'));

Route::get('~sites', array('uses'=>'PageController@sites'));

Route::get('about', array('uses'=>'PageController@about'));

Route::get('wiki', array('uses'=>'PageController@wiki'));

Route::get('node/{pretty}', array('uses'=>'NodeController@index'));

Route::get('notification', array('uses'=>'NotificationController@index'));

Route::get('topic/create', array('uses'=>'TopicController@create'));

Route::put('topic/{id}/update', array('uses'=>'TopicController@update'));

Route::delete('topic/{id}', array('uses'=>'TopicController@destroy'));