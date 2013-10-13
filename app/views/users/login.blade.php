@extends('layouts.master')

@section('app')

<div class="nice-notice">

    {{ Session::has('message') ? '<p>' . Session::get('message') . '</p>' : '' }}

</div>

<ul class="create-session">

    {{ Form::open(array('url'=>'session/store')) }}

    <li class="field">

        {{ Form::label('username', Lang::get('user.account'), array('class'=>'inline')) }}

        {{ Form::text('username', Input::old('username'), array('class'=>'wide input')) }}

    </li>

    <li class="field">

        {{ Form::label('password', Lang::get('user.password'), array('class'=>'inline')) }}

        {{ Form::password('password', array('class'=>'wide input')) }}
    </li>

    <li class="custom">

        <div class="wide">

            <label class="pull_left">{{ Form::checkbox('remember') }}{{ Lang::get('app.remember_me') }}</label>

            {{ Form::submit(Lang::get('user.login'), array('class'=>'btn-def btn-def-orange')) }}

        </div>

    </li>

    {{ Form::close() }}

</ul>

@stop

@section('sidebar')

<div class="nice-box">

    <ul class="nice-tabs">

        <li>
            <a href="{{ URL::to('signup') }}">
                {{ Lang::get('user.signup') }}
            </a>
        </li>

        <li class="active">
            <a href="{{ URL::to('login') }}">
                {{ Lang::get('user.login') }}
            </a>
        </li>

        <li>
            <a href="{{ URL::to('session/forgot_password') }}">
                {{ Lang::get('user.forgot_password') }}
            </a>
        </li>

    </ul>

</div>

@stop
