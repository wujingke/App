<?php

class TopicController extends BaseController {

    public function __construct()
    {
        $this->beforeFilter('auth', array('except'=>array('index', 'show', 'viewCount')));

        $this->beforeFilter('csrf', array('on'=>'post'));

        $this->afterFilter('log', array('except'=>array('index', 'show')));
    }

    public function index()
    {
        return View::make('topics.index')
            ->with('nodes', Node::all())
            ->with('topics', Topic::orderBy('updated_at', 'desc')->paginate(3));
    }

    public function show($id)
    {
        $id = $id - 2013;

        $topic = Topic::find($id);

        if ($topic) {
            return View::make('topics.show')
                ->with('page_view', $this->pageView($id))
                ->with('likes', $this->likeCount($id))
                ->with('liked', Auth::check() ? $this->liked($id) : false)
                ->with('topic', $topic);
        }


        return App::abort(404);
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
        $topic->user_id      = Auth::user()->id;
        $topic->node_id      = Input::get('node_id');
        $topic->title        = Input::get('title');
        $topic->content      = Input::get('content');
        $topic->content_html = Clean::htmlawed(Topic::markdown(Input::get('content')));

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

            $topic->title        = Input::get('title');
            $topic->content      = Input::get('content');
            $topic->content_html = Clean::htmlawed(Topic::markdown(Input::get('content')));
            $topic->save();
        }
        return Redirect::back()
            ->with('message', Lang::get('app.update_successfully'));
    }

    public function destroy($id)
    {
        if (Request::ajax() && $this->can(Topic::find($id))) {
            Topic::destroy($id);
            return Response::json(array('success'=>1));
        }
        return '503';
    }

    public function frozenToggle($id)
    {
        if (Request::ajax()) {

            $topic = Topic::find($id);

            if ($topic && Auth::user()->staff) {
                $topic->frozen = !$topic->frozen;
                if ($topic->save()) {
                    return Response::json(array('success'=>1));
                }
            }
        }

        return Response::json(array('success'=>0));
    }

    public function like($id)
    {
        if (Request::ajax() && ($id <= DB::table('topics')->count())) {
            $this->liked($id)
                ? Redis::srem('topic:' . $id . ':likes', Auth::user()->id)
                : Redis::sadd('topic:' . $id . ':likes', Auth::user()->id);
        }
        return Response::json(array('success'=>true, 'likes'=>$this->likeCount($id)));
    }

    private function can($topic)
    {
        return ($topic && ($topic->user->id == Auth::user()->id)) ? true : false;
    }

    private function pageVIew($id)
    {
        return Redis::incr('topic:' . $id . ':page.view');
    }

    private function likeCount($id)
    {
        return Redis::scard('topic:' . $id . ':likes');
    }

    private function liked($id)
    {
        return Redis::sismember('topic:' . $id . ':likes', Auth::user()->id);
    }

}