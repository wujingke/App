@extends('layouts.master')

@section('app')

	<ul>
		@foreach($notifications as $notification)
			<li>{{ $notification->content }}</li>
		@endforeach
	</ul>

@stop

@section('sidebar')

	<div class="nice-box">

	</div>

@stop