<?php

class ReplyController extends BaseController {

	public function __construct()
	{
		$this->beforeFilter('auth');

		$this->beforeFilter('csrf', array('on'=>'post'));
	}

	public function store()
	{
		$v = Reply::validate(Input::all());

		if ($v->fails()) {
			return Redirect::back()
				->withErrors($v);
		}

		$reply = new Reply;

		$reply->user_id      = Auth::user()->id;
		$reply->topic_id     = Input::get('topic_id');
		$reply->content      = Input::get('content');
		$reply->content_html = Clean::htmlawed(Reply::markdown(Input::get('content')));

		$reply->save();

		return Redirect::back()
			->with('message', '');
	}

}