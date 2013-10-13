<div class="vcard">

    <ul class="info">

        <li>{{ $topic->user->profile->nickname }}@{{ $topic->user->username }}</li>

        <li>{{ $topic->user->profile->location }}</li>

        <li>
            <a href="{{ URL::to('user/follow?target=' . $topic->user->username) }}" class="follow">
                {{ $is_following ? Lang::get('page.unfollow') : Lang::get('page.follow') }}
            </a>
        </li>

        <li class="nice-avatar">

            <span>{{ HTML::image($topic->user->profile->avatar_square_url) }}</span>

        </li>

    </ul>

    <ul class="user-status three_up tiles">

        <li>
            <a href="{{ URL::to('u/' . $topic->user->username . '/followers') }}">
                {{ $topic->user->followers->count() }}
                <span>{{ Lang::get('user.followers') }}</span>
            </a>
        </li>

        <li>
            <a href="{{ URL::to('u/' . $topic->user->username . '/topics') }}">
                {{ $topic->user->topics->count() }}
                <span>{{ Lang::get('user.topics') }}</span>
            </a>
        </li>

        <li>
            <a href="{{ URL::to('u/' . $topic->user->username . '/following') }}">
                {{ $topic->user->following->count() }}
                <span>{{ Lang::get('user.following') }}</span>
            </a>
        </li>
    </ul>

</div>
