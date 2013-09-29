@extends('layouts.master')

@section('app')

	<div class="nice-notice">
		{{ Session::has('message') ? '<p>' . Session::get('message') . '</p>' : '' }}
	</div>

	<div class="nice-avatar">
		{{ HTML::image('img/avatar-default.png') }}
	</div>

	<ul class="edit-avatar">

		{{ HTML::image('img/pretty.jpg', '', array('id'=>'cropbox')) }}
	{{ Form::open(array('url'=>'settings/password', 'method'=>'put')) }}

	{{ Form::close() }}

	</ul>

@stop

@section('sidebar')
	<div class="nice-box">
		@include('sections.settings._avatar')
	</div>
@stop