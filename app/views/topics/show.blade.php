@extends('layouts.master')

@section('app')

	<div class="topic-title">
		<span><i class="icon-bookmark"></i></span>
		{{ $topic->title }}
	</div>
	<div class="topic-content">
		{{ $topic->content_html }}
	</div>
	<div class="topic-data">
		<span><i class="icon-comment"></i>6</span>
		<span><i class="icon-eye"></i>5</span>
		<span><i class="icon-clock"></i><span class="timeago" date-time="{{ $topic->created_at }}"></span></span>
	</div>
	<ul class="topic-comments">
		@foreach($topic->replies as $reply)
			<li>
				<span class="mini-avatar">{{ HTML::image($reply->user->profile->avatar_square_url) }}</span>
				<a href="" class="meta">{{ $reply->user->username }}</a>
				<span class="meta"> {{ Lang::get('page.said') }}</span>
				<span class="timeago meta" date-time="{{ $reply->created_at }}"></span>
				<span class="meta pull_right trigger-content"><i class="icon-reply"></i></span>
				<div>{{ $reply->content_html }}</div>
			</li>
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