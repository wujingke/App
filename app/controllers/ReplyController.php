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

		if ($reply->save()) {
			$notification = new Notification;
			$notification->content = $this->notify($reply, 'reply');
			$notification->user_id = $reply->topic->user->id;
			$notification->save();
		}

		return Redirect::back()
			->with('message', '');
	}

	private function notify($reply, $type)
	{
		$data = array(
			'title'    => $reply->topic->title,
			'content'  => $reply->content,
			'topicId'  => ($reply->topic->id + 2013),
			'username' => $reply->user->username
		);

		return Lang::get('notification.' . $type, $data);
	}

}