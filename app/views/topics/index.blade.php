@extends('layouts.master')

@section('app')
	<div class="nice-plus">
		<p class="order">
			<i class="icon-chat"></i>
			<span><a href="">{{ Lang::get('page.latest') }}</a></span>
			<span><a href="">{{ Lang::get('page.popular') }}</a></span>
			<span class="active"><a href="">{{ Lang::get('page.default') }}</a></span>
		</p>
	</div>
	<ul class="topics">
		@foreach($topics as $topic)
		<li>
			<a href="{{ URL::route('topic', $topic->id + 2013) }}">{{ $topic->title }}</a>
			<a href="" class="pull_right"><i class="icon-reply"></i></a>
			<div><span>2013-13-13</span></div>
			<div class="avatar"><img src="https://identicons.github.com/b9757ef68a28f8b5874f00c6805bee43.png"></div>
		</li>
		@endforeach
	</ul>
	<div class="pagination">
		
	</div>
	<div class="nice-minus">
		<p>sdfsf</p>
	</div>
@stop