@extends('layouts.master')

@section('app')

	<div class="topic-title">
		{{ $topic->title }}
	</div>
	<div class="topic-content">
		{{ $topic->content }}
	</div>
	<div class="topic-data">
		<span><i class="icon-comment"></i>6</span>
		<span><i class="icon-eye"></i>5</span>
		<span><i class="icon-clock"></i><span class="timeago" date-time="{{ $topic->created_at }}"></span></span>
	</div>
	<div class="topic-comments">
		{{ Form::open(array('url'=>'', 'class'=>'field')) }}
			{{ Form::textarea('comment', '', array('class'=>'textarea input', 'rows'=>'3')) }}
		{{ Form::close() }}
	</div>

@stop

@section('sidebar')

	<div class="nice-box">

	</div>

@stop