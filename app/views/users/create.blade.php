@extends('layouts.master')

@section('app')

<ul class="create-user">
	{{ Form::open(array('url'=>'user/store')) }}
		<li class="field">
			{{ Form::label('username', '', array('class'=>'inline')) }}
			{{ Form::text('username', '', array('class'=>'wide input')) }}
		</li>
		<li class="field">
			{{ Form::label('email', '', array('class'=>'inline')) }}
			{{ Form::text('email', '', array('class'=>'wide input')) }}
		</li>
		<li class="field">
			{{ Form::label('password', '', array('class'=>'inline')) }}
			{{ Form::password('password', array('class'=>'wide input')) }}
		</li>
		<li class="field">
			<div class="wide text-right">
				<label class="wide">{{ Form::checkbox('term', true) }}{{ Lang::get('page.i_agree_with_the_above_terms') }}</label>
			</div>
		</li>
		<li class="text-right">
			{{ Form::submit(Lang::get('page.signup'), array('class'=>'btn-def btn-def-orange')) }}
		</li>

	{{ Form::close() }}
</ul>

@stop


@section('sidebar')

	<div class="nice-box">

		<ul class="nice-tabs">
			<li class="active"><a href="{{ URL::to('signup') }}">{{ Lang::get('page.signup') }}</a></li>
			<li><a href="{{ URL::to('login') }}">{{ Lang::get('page.login') }}</a></li>
		</ul>

	</div>

@stop