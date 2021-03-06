@extends('layouts.master')

@section('app')

<ul class="topics">

    @foreach($topics as $topic)
    <li>
        <a href="{{ URL::route('topic', $topic->id + 2013) }}">{{ $topic->title }}</a>
        <a href="{{ URL::route('topic', $topic->id + 2013) }}" class="pull_right" target="_blank"><i class="icon-export"></i></a>
        <div class="topic-meta">
            <a href="{{ URL::to('u/' . $topic->user->username) }}">{{ $topic->user->username }}</a>
            <span>{{ Lang::get('app.slash') }}</span>
            <a href="{{ URL::route('topic', $topic->id + 2013) }}">{{ Lang::get('app.discuss') }}({{ $topic->replies->count() }})</a>
            <span>{{ Lang::get('app.slash') }}</span>
            <span class="timeago" date-time="{{ $topic->created_at }}"></span>
        </div>
        <div class="avatar">
            <img src="{{ URL::to($topic->user->profile->avatar_square_url) }}">
        </div>
    </li>
    @endforeach

</ul>

    {{ $topics->links() }}

@stop

@section('sidebar')

<div class="nice-box">
    <div class="text-center">
        <a class="btn-nice btn-nice-green" href="{{ URL::to('topic/create') }}">{{ Lang::get('app.create_topic') }}</a>
    </div>
</div>

<div class="nice-box">
    @include('sections.node')
</div>

<div class="nice-box">
    @include('sections.status')
</div>

@stop
