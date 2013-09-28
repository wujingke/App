@extends('layouts.master')

@section('app')

	<ul class="select-nodes">
		@foreach($nodes as $node)
			<li class="{{ (Input::old('node_id') == $node->id) ? 'active' : 'nil' }}"><a data-node-id="{{ $node->id }}" href="{{ URL::to('node/' . $node->pretty) }}">{{ $node->name }}</a></li>
		@endforeach
	</ul>
	<ul class="topic-form">
		{{ Form::open(array('url'=>'topic/store')) }}
			{{ Form::hidden('node_id', Input::old('node_id'), array('id'=>'nodeId')) }}
			<li class="field">
				{{ Form::label('title', Lang::get('page.title'), array('class'=>'inline')) }}
				{{ $errors->first('title', '<span class="nice-message"><i class="icon-left-dir"></i>:message</span>') }}
				{{ Form::text('title', Input::old('title'), array('class'=>'input', 'autocomplete'=>'off')) }}
			</li>
			<li class="field">
				<span id="insert-picture" class="pull_right"><i class="icon-picture"></i></span>
				<span id="insert-link" class="pull_right"><i class="icon-link"></i></span>
				{{ Form::label('content', Lang::get('page.content'), array('class'=>'inline')) }}
				{{ $errors->first('content', '<span class="nice-message"><i class="icon-left-dir"></i>:message</span>') }}
				{{ Form::textarea('content', Input::old('content'), array('class'=>'textarea input', 'rows'=>'16', 'autocomplete'=>'off')) }}
			</li>
			<li>
				{{ Form::submit(Lang::get('page.submit'), array('class'=>'btn-def btn-def-orange')) }}
			</li>
		{{ Form::close() }}
	</ul>

@stop

@section('sidebar')

	<div class="nice-box">

	</div>

@stop