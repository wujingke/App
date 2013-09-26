@extends('layouts.master')

@section('app')

<ul class="nice-tabs">
	<li><a href="{{ URL::to('settings/password') }}">{{ Lang::get('page.change_password') }}</a></li>
	<li class="active"><a href="{{ URL::to('settings/profile') }}">{{ Lang::get('page.profile') }}</a></li>
</ul>

<ul class="profile-form">

{{ Form::open(array('url'=>'', 'method'=>'put')) }}

	<li class="field">
		{{ Form::text('nickname', '', array('class'=>'input')) }}
	</li>
	<li class="field">
		{{ Form::text('nickname', '', array('class'=>'input')) }}
	</li>
	<li class="field">
		{{ Form::text('nickname', '', array('class'=>'input')) }}
	</li>
	<li class="field">
		{{ Form::text('nickname', '', array('class'=>'input')) }}
	</li>
	<li class="field">
		{{ Form::text('nickname', '', array('class'=>'input')) }}
	</li>
	<li>
		{{ Form::submit('submit', array('class'=>'')) }}
	</li>

{{ Form::close() }}

</ul>

@stop

@section('sidebar')
	<div class="nice-box">
		@include('sections.avatar')
	</div>
@stop