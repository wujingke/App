@extends('layouts.master')

@section('app')

	<ul class="select-nodes">
		@foreach($nodes as $node)
			<li><a data-node-id="{{ $node->id }}" href="{{ URL::to('node/' . $node->pretty) }}">{{ $node->name }}</a></li>
		@endforeach
	</ul>
	<ul class="topic-form">
		{{ Form::open(array('url'=>'topic/store')) }}
			{{ Form::hidden('node_id', '', array('id'=>'nodeId')) }}
			<li class="field">
				{{ Form::label('title', Lang::get('page.title')) }}
				{{ Form::text('title', '', array('class'=>'input')) }}
			</li>
			<li class="field">
				<span class="pull_right"><i class="icon-link"></i></span>
				<span class="pull_right"><i class="icon-picture"></i></span>
				{{ Form::label('content', Lang::get('page.content'), array('class'=>'inline')) }}
				{{ Form::textarea('content', '', array('class'=>'textarea input', 'rows'=>'16')) }}
			</li>
			<li>
				{{ Form::submit('submit', array('class'=>'btn-def btn-def-orange')) }}
			</li>
		{{ Form::close() }}
	</ul>

@stop

@section('sidebar')

	<div class="nice-box">

	</div>

@stop