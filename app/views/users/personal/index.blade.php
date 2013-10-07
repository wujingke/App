@extends('layouts.master')

@section('app')

	<ul class="user-info">
		<div class="nice-avatar">
			<span>{{ HTML::image($user->profile->avatar_square_url) }}</span>
			<a href="{{ URL::to('user/follow?target=' . $user->username) }}" class="btn-def btn-def-orange action-follow">{{ Lang::get('page.follow') }}</a>
		</div>
		<li>
			<span>{{ Lang::get('page.nickname') }}</span>
			{{ $user->profile->nickname }}
		</li>

		<li>
			<span>{{ Lang::get('page.location') }}</span>
			{{ $user->profile->location }}
		</li>

		<li>
			<span>{{ Lang::get('page.website') }}</span>
			<a href="{{ $user->profile->website }}">{{ $user->profile->website }}</a>
		</li>

		<li>
			<span>{{ Lang::get('page.company') }}</span>
			{{ $user->profile->company }}
		</li>

		<li>
			<span>{{ Lang::get('page.contact_email') }}</span>
			<a href="mailto:{{ $user->profile->contact_email }}">{{ $user->profile->contact_email }}</a>
		</li>
	</ul>

@stop

@section('sidebar')

	<div class="nice-box">

		<ul class="nice-tabs">
			<li class="active"><a href="{{ URL::route('userIndex', $user->username) }}">{{ Lang::get('page.user_info') }}</a></li>
			<li><a href="{{ URL::route('userTopics', $user->username) }}">{{ Lang::get('page.user_topics') }}</a></li>
			<li><a href="{{ URL::route('userFollowing', $user->username) }}">{{ Lang::get('page.user_following') }}</a></li>
			<li><a href="{{ URL::route('userFollowers', $user->username) }}">{{ Lang::get('page.user_followers') }}</a></li>
		</ul>

	</div>

@stop