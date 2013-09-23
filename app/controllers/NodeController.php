<?php

class NodeController extends BaseController {

	public function index($pretty)
	{
		$node = Node::where('pretty', '=', $pretty)->first();
		return $node;
	}

	public function sites()
	{

	}

	public function about()
	{

	}

	public function wiki()
	{
		
	}

}