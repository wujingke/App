<?php

class TopicController extends BaseController {

	public function index()
	{
		return View::make('topics.index')
			->with('topics', Topic::paginate(3));
	}


	public function show($id)
	{
		$topic = Topic::find($id - 2013);
		return View::make('topics.show')
			->with('topic', $topic);
	}

}