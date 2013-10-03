@extends('layouts.master')

@section('app')
  
@stop

@section('sidebar')
    <div class="nice-box">
        <ul class="nice-tabs">
            <li><a href="{{ URL::to('~master/topic') }}">{{ Lang::get('page.topic') }}</a></li>
            <li><a href="{{ URL::to('~master/node') }}">{{ Lang::get('page.node') }}</a></li>
            <li><a href="{{ URL::to('~master/reply') }}">{{ Lang::get('page.reply') }}</a></li>
        </ul>
    </div>
@stop