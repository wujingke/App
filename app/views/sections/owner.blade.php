@if (Auth::check() && (Auth::user()->id == $user->id))

	<a href="{{ URL::to('topic/' . $topic->id) }}">

		{{ Lang::get('page.edit') }}

	</a>

	<span>{{ Lang::get('page.slash') }}</span>

	<a href="{{ URL::to('topic/' . $topic->id) }}" class="action-delete">
		{{ Lang::get('page.delete') }}
	</a>

	<span>{{ Lang::get('page.slash') }}</span>

@endif
