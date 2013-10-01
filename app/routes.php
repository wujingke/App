<?php

Route::get('/', array('uses'=>'TopicController@index'));

Route::get('login', array('uses'=>'SessionController@create'));

Route::get('signup', array('uses'=>'UserController@create'));

Route::post('session/store', array('uses'=>'SessionController@store'));

Route::get('session/forgot_password', array('uses'=>'SessionController@reminderCreate'));

Route::post('user/store', array('uses'=>'UserController@store'));

Route::get('logout', array('uses'=>'SessionController@destroy'));

Route::get('t/{id}', array('as'=>'topic', 'uses'=>'TopicController@show'));

Route::get('~master', array('as'=>'master', 'uses'=>'MasterController@index'));

Route::post('~master/node/store', array('uses'=>'MasterController@nodeStore'));

Route::get('settings', array('uses'=>'UserController@profileIndex'));

Route::get('settings/profile', array('uses'=>'UserController@profileEdit'));

Route::put('settings/profile', array('uses'=>'UserController@profileUpdate'));

Route::get('settings/password', array('uses'=>'UserController@edit'));

Route::put('settings/password', array('uses'=>'UserController@update'));

Route::get('settings/avatar', array('uses'=>'UserController@editAvatar'));

Route::post('settings/avatar', array('uses'=>'UserController@updateAvatar'));

Route::post('settings/avatar/upload', array('uses'=>'UserController@uploadAvatar'));

Route::get('~users', array('uses'=>'PageController@users'));

Route::get('~sites', array('uses'=>'PageController@sites'));

Route::get('about', array('uses'=>'PageController@about'));

Route::get('wiki', array('uses'=>'PageController@wiki'));

Route::get('node/{pretty}', array('uses'=>'NodeController@index'));

Route::get('notification', array('uses'=>'NotificationController@index'));

Route::get('topic/create', array('uses'=>'TopicController@create'));

Route::put('topic/{id}/update', array('uses'=>'TopicController@update'));

Route::delete('topic/{id}', array('uses'=>'TopicController@destroy'));

Route::post('topic/store', array('uses'=>'TopicController@store'));

Route::get('topic/{id}', array('uses'=>'TopicController@edit'));

Route::get('u/{username}', array('as'=>'userIndex', 'uses'=>'UserController@show'));

Route::get('u/{username}/topics', array('as'=>'userTopics', 'uses'=>'UserController@show'));

Route::get('u/{username}/followers', array('as'=>'userFollowers', 'uses'=>'UserController@show'));

Route::get('u/{username}/following', array('as'=>'userFollowing', 'uses'=>'UserController@show'));

Route::get('u/{username}/replies', array('uses'=>'UserController@show'));

Route::post('reply/store', array('uses'=>'ReplyController@store'));
