<ul class="status">

    <li>
        <span>{{ Lang::get('app.topic') }}({{ Redis::get('site.topics') }})</span>
        <span>{{ Lang::get('app.slash') }}</span>
        <span>{{ Lang::get('app.node') }}({{ $nodes->count() }})</span>
        <span>{{ Lang::get('app.slash') }}</span>
        <span>{{ Lang::get('app.user') }}({{ Redis::get('site.users') }})</span>
    </li>

    <li>
        <a href="{{ URL::to('help') }}">{{ Lang::get('app.help') }}</a>
        <span>{{ Lang::get('app.slash') }}</span>
        <a href="{{ URL::to('contact') }}">{{ Lang::get('app.contact') }}</a>
        <span>{{ Lang::get('app.slash') }}</span>
        <a href="{{ URL::to('feedback') }}">{{ Lang::get('app.feedback') }}</a>
    </li>

</ul>
