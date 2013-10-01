@extends('layouts.master')

@section('app')

	<div class="topic-title">
		<span><i class="icon-bookmark"></i></span>
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
		@foreach($topic->replies as $reply)
			<li>{{ $reply->content }}</li>
		@endforeach
	</ul>
	<ul class="create-reply">
		{{ Form::open(array('url'=>'reply/store')) }}
			{{ Form::hidden('topic_id', $topic->id) }}
			<li class="field">
				{{ $errors->first('content', '<p class="nice-message"><i class="icon-right-dir"></i>:message</p>') }}
				{{ Form::textarea('content', '', array('class'=>'textarea input', 'rows'=>'3', 'autocomplete'=>'off')) }}
			</li>
			<li class="text-right">
				{{ Form::submit(Lang::get('page.reply'), array('class'=>'btn-def btn-def-orange')) }}
			</li>
		{{ Form::close() }}
	</ul>

@stop

@section('sidebar')

	<div class="nice-box">
		@include('sections.vcard')
	</div>

@stop