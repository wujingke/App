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
		$topic = Topic::find($id);

		if (!$this->can($topic)) {
			return '503';
		}
		return View::make('topics.edit')
			->with('topic', $topic)
			->with('nodes', Node::all());
	}

	public function update($id)
	{
		$topic = Topic::find($id);
		
		if ($this->can($topic)) {

			$v = Topic::validate(array(
				'node_id' => $topic->node_id,
				'title'   => Input::get('title'),
				'content' => Input::get('content')
			));

			if ($v->fails()) {
				return Redirect::back()
					->withErrors($v)
					->withInput();
			}

			$topic->title   = Input::get('title');
			$topic->content = Input::get('content');
			$topic->save();
		}
		return Redirect::back()
			->with('message', Lang::get('page.update_successfully'));
	}

	public function destroy($id)
	{
		if ($this->can(Topic::find(id))) {
			
		}
	}

	private function can($topic)
	{
		return ($topic && ($topic->user->id == Auth::user()->id)) ? true : false;
	}

}