<?php

class ReplyController extends BaseController {

    public function __construct()
    {
        $this->beforeFilter('auth');

        $this->beforeFilter('csrf', array('on'=>'post'));
    }

    public function edit($id)
    {
        if (Request::ajax()) {
            $reply = Reply::find($id);
            return $reply
                ? Response::json(array('content'=>$reply->content, 'success'=>true))
                : Response::json(array('success'=>false));
        }

        return App::abort(404, 'Page not found');
    }

    public function update($id)
    {
        $reply = Reply::find($id);

        $content = (Input::has('content') && (Input::get('content') != ''))
            ? Input::get('content')
            : '<p class="trash">' . Lang::get('app.reply_trashed') . '</p>';

        $content_html = Clean::htmlawed(Reply::markdown($content));

        if ($reply && ($reply->user->id == Auth::user()->id)) {
            $reply->content = $content;
            $reply->content_html = $content_html;
            
            if ($reply->save()) {
                return Response::json(array('content_html'=>$content_html, 'success'=>true));
            }
        }

        return Response::json(array('success'=>false));
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
        $reply->content_html = Clean::htmlawed(Reply::markdown($this->content()));

        if ($reply->save()) {
            if (Auth::user()->id != $reply->topic->user->id) {
                $notification = new Notification;
                $notification->content = $this->notify($reply, 'reply');
                $notification->user_id = $reply->topic->user->id;
                $notification->save();
            }

            if ($this->ats()) {
                foreach ($this->ats() as $user) {
                    if (Auth::user()->id != $user->id) {
                        $notification = new Notification;
                        $notification->content = $this->notify($reply, 'at');
                        $notification->user_id = $user->id;
                        $notification->save();
                    }
                }
            }
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

    private function content()
    {
        return preg_replace('/@(\w{4,32})/i', '@<a href="/u/${1}">${1}</a>', Input::get('content'));
    }

    private function ats()
    {
        if (preg_match_all('/@(\w{4,32})/', Input::get('content'), $at)) {

            list($keys, $names) = array_divide(array_unique($at[1]));

            return DB::table('users')->whereIn('username', $names)->take(6)->get();
        }
    }

}