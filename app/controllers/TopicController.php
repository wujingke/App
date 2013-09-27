<?php

class TopicController extends BaseController {

	public function index()
	{
		return View::make('topics.index')
			->with('nodes', Node::all())
			->with('topics', Topic::paginate(3));
	}


	public function show($id)
	{
		$topic = Topic::find($id - 2013);
		return View::make('topics.show')
			->with('topic', $topic);
	}

	public function create()
	{
		return View::make('topics.create')
			->with('nodes', Node::all());
	}

	public function store()
	{
		$v = Topic::validate(Input::all());
		if ($v->fails()) {
			return Redirect::back()
				->withErrors($v)
				->withInput();
		}

		$topic = new Topic;
		$topic->user_id = Auth::user()->id;
		$topic->node_id = Input::get('node_id');
		$topic->title   = Input::get('title');
		$topic->content = Input::get('content');

		if (!$topic->save()) {
			return '404';
		}

		return Redirect::to('t/' . ($topic->id + 2013));
	}

	public function edit($id)
	{
		return View::make('topics.edit')
			->with('topic', Topic::find($id))
			->with('nodes', Node::all());
	}

}