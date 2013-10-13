@extends('layouts.master')

@section('app')

<div class="nice-notice">

    {{ Session::has('message') ? '<p>' . Session::get('message') . '</p>' : '' }}

</div>

<ul class="create-user">

    {{ Form::open(array('url'=>'user/store')) }}

    <li class="field">

        {{ Form::label('username', Lang::get('user.username'), array('class'=>'inline')) }}

        {{ Form::text('username', Input::old('username'), array('class'=>'wide input')) }}

        {{ $errors->first('username', '<p class="cool-error wide text-left pull_right"><i class="icon-right-dir"></i>:message</p>') }}

    </li>

    <li class="field">

        {{ Form::label('email', Lang::get('user.email'), array('class'=>'inline')) }}

        {{ Form::text('email', Input::get('email'), array('class'=>'wide input')) }}

        {{ $errors->first('email', '<p class="cool-error wide text-left pull_right"><i class="icon-right-dir"></i>:message</p>') }}

    </li>

    <li class="field">

        {{ Form::label('password', Lang::get('user.password'), array('class'=>'inline')) }}

        {{ Form::password('password', array('class'=>'wide input')) }}

        {{ $errors->first('password', '<p class="cool-error wide text-left pull_right"><i class="icon-right-dir"></i>:message</p>') }}

    </li>

    <li class="text-right">

        {{ Form::submit(Lang::get('user.signup'), array('class'=>'btn-def btn-def-orange')) }}
    </li>

    {{ Form::close() }}

</ul>

@stop

@section('sidebar')

<div class="nice-box">

    <ul class="nice-tabs">

        <li class="active">
            <a href="{{ URL::to('signup') }}">
                {{ Lang::get('user.signup') }}
            </a>
        </li>

        <li>
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
