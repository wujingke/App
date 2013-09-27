<?php

class Reply extends BaseModel {

	public static $rules = array(
		'topic_id' => 'required|exists:topics,id',
		'content' => 'required|min:5',
	);

	public function topic()
	{
		return $this->belongsTo('Topic');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}