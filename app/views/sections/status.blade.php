<ul class="status">

    <li>
        <span>{{ Lang::get('app.topic') }}(10)</span>
        <span>{{ Lang::get('app.slash') }}</span>
        <span>{{ Lang::get('app.node') }}({{ $nodes->count() }})</span>
        <span>{{ Lang::get('app.slash') }}</span>
        <span>{{ Lang::get('app.user') }}(123)</span>
    </li>

    <li>
        <a href="{{ URL::to('help') }}">{{ Lang::get('app.help') }}</a>
        <span>{{ Lang::get('app.slash') }}</span>
        <a href="{{ URL::to('contact') }}">{{ Lang::get('app.contact') }}</a>
        <span>{{ Lang::get('app.slash') }}</span>
        <a href="{{ URL::to('feedback') }}">{{ Lang::get('app.feedback') }}</a>
    </li>

</ul>
