<?php

use \Michelf\Markdown;

class BaseModel extends Eloquent {

	public static function validate($data)
	{
		return Validator::make($data, static::$rules);
	}

	public static function markdown($text)
	{
		return Markdown::defaultTransform($text);
	}
}