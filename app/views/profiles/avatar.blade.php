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

		{{ Form::open(array('url'=>'settings/avatar')) }}
			{{ Form::hidden('x', '', array('id'=>'x')) }}
			{{ Form::hidden('y', '', array('id'=>'y')) }}
			{{ Form::hidden('h', '', array('id'=>'h')) }}
			{{ Form::hidden('w', '', array('id'=>'w')) }}
			{{ Form::submit(Lang::get('page.save')) }}
		{{ Form::close() }}

	</ul>

@stop

@section('sidebar')
	<div class="nice-box">
		@include('sections.settings._avatar')
	</div>
@stop