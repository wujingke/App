<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	{{ HTML::style('assets/application.css') }}
	{{ HTML::script('assets/application.js') }}
</head>
<body>
	<div class="wrapper">
		<div class="nav-bar top-fixed">
			<div class="row">
				<div class="logo">
					<a href="{{ URL::route('home') }}"></a>
				</div>
				<ul class="io columns tiles">
					@if(Auth::check())
					<li><a href="{{ URL::to('u/' . Auth::user()->username) }}">{{ Auth::user()->username }}</a></li>
					<li><a href="{{ URL::to('settings') }}">{{ Lang::get('user.settings') }}</a></li>
					<li><a href="{{ URL::to('notification') }}">{{ Lang::get('user.notify') }}</a></li>
					<li><a href="{{ URL::to('logout') }}">{{ Lang::get('user.logout') }}</a></li>
					@else
					<li><a href="{{ URL::to('signup') }}">{{ Lang::get('user.signup') }}</a></li>
					<li class="login"><a href="{{ URL::to('login') }}">{{ Lang::get('user.login') }}</a></li>
					@endif
				</ul>
			</div>
		</div>
		<div class="master">
			<div class="row">
				<div class="eight columns">
					<div class="nice-box">
						@yield('app')
					</div>
				</div>
				<div class="four columns">
					@yield('sidebar')
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="row">
				<p>&copy; 2013 Fyiorb · All rights reserved.</p>
			</div>
		</div>
	</div>
	@unless(Auth::check())
		@include('sections.login')
	@endunless
</body>
</html>
