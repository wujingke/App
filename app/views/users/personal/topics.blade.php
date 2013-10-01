@extends('layouts.master')

@section('app')

	<ul class="topics">
		@foreach($user->topics as $topic)
		<li>
			<a href="{{ URL::route('topic', $topic->id + 2013) }}">{{ $topic->title }}</a>
			<div class="topic-meta">
				<a href="{{ URL::to('topic/' . $topic->id) }}">{{ Lang::get('page.edit') }}</a>
				<span>{{ Lang::get('page.slash') }}</span>
				<a href="{{ URL::route('topic', $topic->id + 2013) }}">{{ Lang::get('page.discuss') }}(19)</a>
				<span>{{ Lang::get('page.slash') }}</span>
				<a href="{{ URL::to('node/' . $topic->node->pretty) }}">{{ $topic->node->name }}</a>
				<span>{{ Lang::get('page.slash') }}</span>
				<span class="timeago" date-time="{{ $topic->created_at }}"></span>
			</div>
			<div class="avatar">{{ HTML::image($user->profile->avatar_square_url) }}</div>
		</li>
		@endforeach
	</ul>

@stop

@section('sidebar')

	<div class="nice-box">

		<ul class="nice-tabs">
			<li><a href="{{ URL::route('userIndex', $user->username) }}">{{ Lang::get('page.user_info') }}</a></li>
			<li class="active"><a href="{{ URL::route('userTopics', $user->username) }}">{{ Lang::get('page.user_topics') }}</a></li>
			<li><a href="{{ URL::route('userFollowing', $user->username) }}">{{ Lang::get('page.user_following') }}</a></li>
			<li><a href="{{ URL::route('userFollowers', $user->username) }}">{{ Lang::get('page.user_followers') }}</a></li>
		</ul>

	</div>

@stop