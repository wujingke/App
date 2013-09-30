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
					{{ Form::hidden('h', '128', array('id'=>'h')) }}
					{{ Form::hidden('w', '128', array('id'=>'w')) }}
					{{ Form::submit(Lang::get('page.save'), array('class'=>'btn-def btn-def-orange')) }}
				{{ Form::close() }}

			</li>

			<li class="three columns nice-avatar">
				{{ HTML::image(Auth::user()->profile->avatar_square_url) }}
				{{ Form::open(array('url'=>'settings/avatar/upload', 'files'=>true)) }}
					{{ Form::file('avatar', array('class'=>'hide-input')) }}
					{{ Form::submit(Lang::get('page.upload'), array('class'=>'btn-def btn-def-orange auto-submit')) }}
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