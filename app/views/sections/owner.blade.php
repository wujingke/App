@if (Auth::check() && (Auth::user()->id == $user->id))

	<a href="{{ URL::to('topic/' . $topic->id) }}">

		{{ Lang::get('app.edit') }}

	</a>

	<span>{{ Lang::get('app.slash') }}</span>

	<a href="{{ URL::to('topic/' . $topic->id) }}" class="action-delete">
		{{ Lang::get('app.delete') }}
	</a>

	<span>{{ Lang::get('app.slash') }}</span>

@endif
