@extends('layouts.master')

@section('app')

<div class="nice-notice">

    {{ Session::has('message') ? '<p>' . Session::get('message') . '</p>' : '' }}

</div>

<div class="edit-avatar">

    <ul class="row">

        <li class="nine columns crop-avatar">

            {{ HTML::image(Auth::user()->profile->avatar_url, '', array('id'=>'cropbox')) }}

            {{ Form::open(array('url'=>'settings/avatar')) }}

                {{ Form::hidden('x', '0', array('id'=>'x')) }}

                {{ Form::hidden('y', '0', array('id'=>'y')) }}

                {{ Form::hidden('h', '0', array('id'=>'h')) }}

                {{ Form::hidden('w', '0', array('id'=>'w')) }}

            {{ Form::close() }}

        </li>

        <li class="three columns nice-avatar">

            <span>{{ HTML::image(Auth::user()->profile->avatar_square_url) }}</span>

            {{ Form::open(array('url'=>'settings/avatar/upload', 'files'=>true)) }}

                {{ Form::file('avatar', array('class'=>'open-file')) }}

                {{ Form::submit(Lang::get('user.upload'), array('class'=>'btn-def btn-def-orange')) }}

                <a href="" class="trigger-save btn-def btn-def-orange">
                    {{ Lang::get('user.save') }}
                </a>

            {{ Form::close() }}
        </li>

    </ul>

</div>

@stop

@section('sidebar')

<div class="nice-box">

    @include('sections.settings._avatar')

</div>

@stop
