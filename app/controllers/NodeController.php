<?php

class NodeController extends BaseController {

	public function index($pretty)
	{
		$node = Node::where('pretty', '=', $pretty)->first();
		$topics = Topic::where('node_id', '=', $node->id)->paginate(2);
		return View::make('nodes.index')
			->with('nodes', Node::all())
			->with('topics', $topics);
	}

}