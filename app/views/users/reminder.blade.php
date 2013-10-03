@extends('layouts.master')

@section('app')

	<div class="nice-notice">
		@if (Session::has('error'))
			<p>{{ trans(Session::get('reason')) }}</p>
		@elseif (Session::has('success'))
			<p>{{ Lang::get('page.email_send') }}</p>
		@endif
	</div>

	<ul class="create-reminder">
		{{ Form::open(array('url'=>'session/forgot_password')) }}
			<li class="field">
				{{ Form::label('email', Lang::get('page.register_email'), array('class'=>'inline')) }}
				{{ Form::text('email', Input::old('email'), array('class'=>'wide input')) }}
			</li>
			<li class="text-right">
				{{ Form::submit(Lang::get('page.submit'), array('class'=>'btn-def btn-def-orange')) }}
			</li>

		{{ Form::close() }}
	</ul>

@stop


@section('sidebar')

	<div class="nice-box">

		<ul class="nice-tabs">
			<li><a href="{{ URL::to('signup') }}">{{ Lang::get('page.signup') }}</a></li>
			<li><a href="{{ URL::to('login') }}">{{ Lang::get('page.login') }}</a></li>
			<li class="active"><a href="{{ URL::to('session/forgot_password') }}">{{ Lang::get('page.forgot_password') }}</a></li>
		</ul>

	</div>

@stop
