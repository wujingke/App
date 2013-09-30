@extends('layouts.master')

@section('app')

	<div class="nice-notice">
		{{ Session::has('message') ? '<p>' . Session::get('message') . '</p>' : '' }}
	</div>

	<ul class="create-session">
		{{ Form::open(array('url'=>'session/store')) }}
			<li class="field">
				{{ Form::label('username', Lang::get('page.username_or_password'), array('class'=>'inline')) }}
				{{ Form::text('username', Input::old('username'), array('class'=>'wide input')) }}
			</li>
			<li class="field">
				{{ Form::label('password', Lang::get('page.password'), array('class'=>'inline')) }}
				{{ Form::password('password', array('class'=>'wide input')) }}
			</li>
			<li>

			</li>
			<li class="text-right">
				{{ Form::submit(Lang::get('page.login'), array('class'=>'btn-def btn-def-orange')) }}
			</li>

		{{ Form::close() }}
	</ul>

@stop


@section('sidebar')

	<div class="nice-box">

		<ul class="nice-tabs">
			<li><a href="{{ URL::to('signup') }}">{{ Lang::get('page.signup') }}</a></li>
			<li class="active"><a href="{{ URL::to('login') }}">{{ Lang::get('page.login') }}</a></li>
		</ul>

	</div>

@stop