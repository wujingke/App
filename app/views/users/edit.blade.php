@extends('layouts.master')

@section('app')

	<div class="nice-notice">
		{{ Session::has('message') ? '<p>' . Session::get('message') . '</p>' : '' }}
	</div>

	<ul class="edit-password">

	{{ Form::open(array('url'=>'settings/password', 'method'=>'put')) }}

		<li class="field">
			{{ Form::label('current_password', Lang::get('page.current_password'), array('class'=>'inline')) }}
			{{ Form::password('current_password', array('class'=>'wide input')) }}
		</li>
		<li class="field">
			{{ Form::label('password', Lang::get('page.new_password'), array('class'=>'inline')) }}
			{{ Form::password('password', array('class'=>'wide input')) }}
		</li>
		<li class="field">
			{{ Form::label('password_confirmation', Lang::get('page.confirm_password'), array('class'=>'inline')) }}
			{{ Form::password('password_confirmation', array('class'=>'wide input')) }}
		</li>
		<li>
			{{ Form::submit(Lang::get('page.confirm'), array('class'=>'btn-def btn-def-orange')) }}
		</li>
	{{ Form::close() }}

	</ul>

@stop

@section('sidebar')
	<div class="nice-box">
		@include('sections.settings._password')
	</div>
@stop