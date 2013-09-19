<?php

class TopicController extends BaseController {

	public function show($id)
	{
		$topic = Topic::find($id - 2013);
		return View::make('topics.show')
			->with('topic', $topic);
	}

}