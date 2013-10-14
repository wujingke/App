@extends('layouts.master')

@section('app')

@if($topic->frozen)

	<div class="nice-notice"><p>{{ Lang::get('page.topic_frozen') }}</p></div>

@endif

<div class="topic-title">

	<span><i class="icon-bookmark"></i></span>
	{{{ $topic->title }}}

	@if (Auth::check() && Auth::user()->staff)
	<span class="pull_right action-frozen {{ $topic->frozen ? 'actived' : 'nil' }}" data-url="{{ URL::to('topic/' . $topic->id . '/frozen') }}">
		<i class="icon-lock"></i>
	</span>
	@endif

	<div class="hover ajax"></div>

</div>

<div class="topic-content">

	{{ $topic->content_html }}

</div>

<div class="topic-data">

	<span>
		<i class="icon-comment"></i><span>{{ $topic->replies->count() }}</span>
	</span>
	<span>
		<i class="icon-eye"></i><span>{{ $page_view }}</span>
	</span>
	<span>
		<i class="icon-clock"></i><span class="timeago" date-time="{{ $topic->created_at }}"></span>
	</span>
	<span class="pull_right like {{ $liked ? 'done' : 'nil' }}" data-token="{{ csrf_token() }}" data-url="{{ URL::to('topic/' . $topic->id . '/like') }}">
		<span>{{ $likes }}</span>
		<i class="icon-heart"></i>
	</span>
</div>

<ul class="topic-comments">

	@foreach($topic->replies as $reply)
	<li>
		<span class="mini-avatar">{{ HTML::image($reply->user->profile->avatar_square_url) }}</span>
		<a href="" class="meta">{{ $reply->user->username }}</a>
		<span class="meta"> {{ Lang::get('app.said') }}</span>
		<span class="timeago meta" date-time="{{ $reply->created_at }}"></span>
		<span class="meta pull_right trigger-content"><i class="icon-reply"></i></span>

		<div>{{ $reply->content_html }}</div>
	</li>
	@endforeach

</ul>

	@unless($topic->frozen)

		@include('topics._reply')

	@endunless

@stop

@section('sidebar')

	<div class="nice-box">
		@include('sections.vcard')
	</div>

@stop
