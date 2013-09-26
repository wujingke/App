@extends('layouts.master')

@section('app')

	<div class="users-roles">
		<p>{{ Lang::get('page.active_users') }}</p>
	</div>
	<ul class="row active-users">
		<li class="two columns">
			<img src="https://identicons.github.com/b9757ef68a28f8b5874f00c6805bee43.png">
		</li>
	</ul>

@stop

@section('sidebar')
	
	<div class="nice-box">
		<div class="users-roles">
			<p>{{ Lang::get('page.cofounder') }}</p>
		</div>
	</div>

	<div class="nice-box">
		<div class="users-roles">
			<p>{{ Lang::get('page.member') }}</p>
		</div>
	</div>

@stop