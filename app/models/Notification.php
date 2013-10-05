<?php

class Notification extends Eloquent {

	public function user()
	{
		return $this->belongsTo('User');
	}

	public static function someMethod()
	{

	}
}