@extends('layouts.master')

@section('app')
	<ul class="topics">
		@foreach($topics as $topic)
		<li>
			<a href="{{ URL::route('topic', $topic->id + 2013) }}">{{ $topic->title }}</a>
			<a href="{{ URL::route('topic', $topic->id + 2013) }}" class="pull_right" target="_blank"><i class="icon-export"></i></a>
			<div class="topic-meta">
				<a href="{{ URL::route('topic', $topic->id + 2013) }}">{{ Lang::get('page.discuss') }}(19)</a>
				<span>{{ Lang::get('page.slash') }}</span>
				<span class="timeago" date-time="{{ $topic->created_at }}"></span>
			</div>
			<div class="avatar"><img src="https://identicons.github.com/b9757ef68a28f8b5874f00c6805bee43.png"></div>
		</li>
		@endforeach
	</ul>
	{{ $topics->links() }}
@stop

@section('sidebar')
	<div class="nice-box">
		<div class="text-center">
			<a class="btn-nice btn-nice-green" href="{{ URL::to('topic/create') }}">{{ Lang::get('page.create_topic') }}</a>
		</div>
	</div>
	<div class="nice-box">
		@include('sections.node')
	</div>
	<div class="nice-box">
		@include('sections.status')
	</div>
@stop