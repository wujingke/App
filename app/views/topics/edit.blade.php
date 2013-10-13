@extends('layouts.master')

@section('app')

<div class="nice-notice">

	{{ Session::has('message') ? '<p>' . Session::get('message') . '</p>' : '' }}

</div>

<ul class="topic-form">

	{{ Form::open(array('url'=>'topic/' . $topic->id . '/update', 'method'=>'put')) }}

	<li class="field">

		{{ Form::label('title', Lang::get('app.title'), array('class'=>'inline')) }}

		{{ $errors->first('title', '<span class="nice-message"><i class="icon-left-dir"></i>:message</span>') }}

		{{ Form::text('title', $topic->title, array('class'=>'input', 'autocomplete'=>'off')) }}

	</li>

	<li class="field">

		<span id="insert-picture" class="pull_right"><i class="icon-picture"></i></span>
		<span id="insert-link" class="pull_right"><i class="icon-link"></i></span>

		{{ Form::label('content', Lang::get('app.content'), array('class'=>'inline')) }}

		{{ $errors->first('content', '<span class="nice-message"><i class="icon-left-dir"></i>:message</span>') }}

		{{ Form::textarea('content', $topic->content, array('class'=>'textarea input', 'rows'=>'16', 'autocomplete'=>'off')) }}

	</li>

	<li>
		{{ Form::submit(Lang::get('user.submit'), array('class'=>'btn-def btn-def-orange')) }}
	</li>

	{{ Form::close() }}

</ul>

@stop

@section('sidebar')

<div class="nice-box">

</div>

@stop
