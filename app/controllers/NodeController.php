<?php

class NodeController extends BaseController {

	public function index($pretty)
	{
		$node = Node::where('pretty', '=', $pretty)->first();

		if ($node) {
			$topics = Topic::where('node_id', '=', $node->id)->paginate(12);
			return View::make('nodes.index')
				->with('nodes', Node::all())
				->with('topics', $topics);	
		}

		return App::abort(404);
	}

}