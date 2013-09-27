<?php

class Topic extends Eloquent {
	
	public function node()
	{
		return $this->belongsTo('Node');
	}
}