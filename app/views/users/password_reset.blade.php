@extends('layouts.master')

@section('app')

<div class="nice-notice">

    {{ Session::has('error') ? '<p>' . trans(Session::get('reason')) . '</p>' : '' }}

</div>

<ul class="password-reset">

    {{ Form::open(array('url'=>'password/reset/' . $token)) }}

    {{ Form::hidden('token', $token) }}

    <li class="field">

        {{ Form::label('email', Lang::get('user.email'), array('class'=>'inline')) }}

        {{ Form::text('email', '', array('class'=>'wide input')) }}

    </li>

    <li class="field">

        {{ Form::label('password', Lang::get('user.new_password'), array('class'=>'inline')) }}

        {{ Form::password('password', array('class'=>'wide input')) }}

    </li>

    <li class="field">

        {{ Form::label('password_confirmation', Lang::get('user.confirm_password'), array('class'=>'inline')) }}

        {{ Form::password('password_confirmation', array('class'=>'wide input')) }}

    </li>

    <li class="custom">

        {{ Form::submit(Lang::get('app.finish'), array('class'=>'btn-def btn-def-orange')) }}

    </li>

    {{ Form::close() }}

</ul>

@stop

@section('sidebar')

	<div class="nice-box">

	</div>

@stop
