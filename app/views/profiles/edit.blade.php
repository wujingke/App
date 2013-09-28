@extends('layouts.master')

@section('app')

<ul class="profile-form">

{{ Form::open(array('url'=>'', 'method'=>'put')) }}


{{ Form::close() }}

</ul>

@stop

@section('sidebar')
	<div class="nice-box">
		@include('sections.settings')
	</div>
@stop