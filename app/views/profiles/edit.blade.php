@extends('layouts.master')

@section('app')

<div class="nice-notice">

    {{ Session::has('message') ? '<p>' . Session::get('message') . '</p>' : '' }}

</div>

<ul class="edit-profile">

    {{ Form::open(array('url'=>'settings/profile', 'method'=>'put')) }}

    <li class="field">

        {{ Form::label('nickname', Lang::get('user.nickname'), array('class'=>'inline')) }}

        {{ Form::text('nickname', $profile->nickname, array('class'=>'wide input')) }}

    </li>

    <li class="field">

        {{ Form::label('location', Lang::get('user.location'), array('class'=>'inline')) }}

        {{ Form::text('location', $profile->location, array('class'=>'wide input')) }}

    </li>

    <li class="field">

        {{ Form::label('website', Lang::get('user.website'), array('class'=>'inline')) }}

        {{ Form::text('website', $profile->website, array('class'=>'wide input')) }}

    </li>

    <li class="field">

        {{ Form::label('company', Lang::get('user.company'), array('class'=>'inline')) }}

        {{ Form::text('company', $profile->company, array('class'=>'wide input')) }}

    </li>

    <li class="field">

        {{ Form::label('contact_email', Lang::get('user.contact_email'), array('class'=>'inline')) }}

        {{ Form::text('contact_email', $profile->contact_email, array('class'=>'wide input')) }}

    </li>

    <li>

        {{ Form::submit(Lang::get('user.update'), array('class'=>'btn-def btn-def-orange')) }}

    </li>

    {{ Form::close() }}

</ul>

@stop

@section('sidebar')

<div class="nice-box">

    @include('sections.settings._profile')

</div>

@stop
