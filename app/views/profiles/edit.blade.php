@extends('layouts.master')

@section('app')

<div class="nice-notice">
	<p>{{ Lang::get('page.update_successfully') }}</p>
</div>

<ul class="profile-form">

{{ Form::open(array('url'=>'', 'method'=>'put')) }}


{{ Form::close() }}

</ul>

@stop

@section('sidebar')
	<div class="nice-box">
		@include('sections.settings._profile')
	</div>
@stop