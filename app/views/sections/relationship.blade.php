<div class="relationship">

	@if (Auth::check())
		<a class="follow" href="{{ URL::to('user/relationship/' . $user->username) }}">
			{{ Lang::get('app.follow') }}
		</a>
	@else
		<a class="follow" href="{{ URL::to('login') }}">{{ Lang::get('app.follow') }}</a>
	@endif

</div>