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
	<ul class="topic-comments">
		{{ Form::open(array('url'=>'')) }}
			<li class="field">
				{{ Form::textarea('comment', '', array('class'=>'textarea input', 'rows'=>'3')) }}
			</li>
			<li class="text-right">
				{{ Form::submit(Lang::get('page.reply'), array('class'=>'btn-def btn-def-orange')) }}
			</li>
		{{ Form::close() }}
	</ul>

@stop

@section('sidebar')

	<div class="nice-box">

	</div>

@stop