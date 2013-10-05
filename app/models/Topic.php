<?php

class Topic extends BaseModel {

	protected $softDelete = true;

	public static $rules = array(
		'node_id' => 'required|exists:nodes,id',
		'title'   => 'required|min:2|max:38',
		'content' => 'required|min:5',
	);

	public function node()
	{
		return $this->belongsTo('Node');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function replies()
	{
		return $this->hasMany('Reply');
	}
}