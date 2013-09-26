@extends('layouts.master')

@section('app')

<ul class="nice-tabs">
	<li><a href="{{ URL::to('settings/password') }}">{{ Lang::get('page.change_password') }}</a></li>
	<li class="active"><a href="{{ URL::to('settings/profile') }}">{{ Lang::get('page.profile') }}</a></li>
</ul>

{{ Form::open(array('url'=>'', 'method'=>'put')) }}

	{{ Form::text('nickname', '', array('class'=>'')) }}



{{ Form::close() }}

@stop

@section('sidebar')
	<div class="nice-box">
		@include('sections.avatar')
	</div>
@stop