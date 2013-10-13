<ul class="nice-tabs">

    <li>
        <a href="{{ URL::to('settings/profile') }}">
            {{ Lang::get('user.auth.profile') }}
        </a>
    </li>

    <li>
        <a href="{{ URL::to('settings/avatar') }}">
            {{ Lang::get('user.auth.avatar') }}
        </a>
    </li>

    <li class="active">
        <a href="{{ URL::to('settings/password') }}">
            {{ Lang::get('user.auth.password') }}
        </a>
    </li>

</ul>
