@extends('layouts.master')

@section('app')

<p class="joinus">{{ Lang::get('page.welcome_to_join_us') }}</p>

<ul class="signup-form">
	{{ Form::open(array('url'=>'', 'class'=>'')) }}
		<li class="field">
			{{ Form::text('username', '', array('class'=>'input')) }}
			{{ Session::has('username') ? '' : '<span class="error">fgdfgfg</span>' }}
		</li>
		<li class="field">
			{{ Form::text('email', '', array('class'=>'input')) }}
		</li>
		<li class="field">
			{{ Form::password('password', array('class'=>'input')) }}
		</li>
		<li>
			<label>{{ Form::checkbox('term', true) }}{{ Lang::get('page.i_agree_with_the_above_terms') }}</label>
		</li>
		<li>
			{{ Form::submit(Lang::get('page.signup'), array('class'=>'btn-def btn-def-orange')) }}
		</li>

	{{ Form::close() }}
</ul>

@stop