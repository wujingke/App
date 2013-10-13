<ul class="status">

    <li>
        <span>{{ Lang::get('page.topic') }}(10)</span>
        <span>{{ Lang::get('page.slash') }}</span>
        <span>{{ Lang::get('page.node') }}({{ $nodes->count() }})</span>
        <span>{{ Lang::get('page.slash') }}</span>
        <span>{{ Lang::get('page.user') }}(123)</span>
    </li>

    <li>
        <a href="{{ URL::to('help') }}">{{ Lang::get('page.help') }}</a>
        <span>{{ Lang::get('page.slash') }}</span>
        <a href="{{ URL::to('contact') }}">{{ Lang::get('page.contact') }}</a>
        <span>{{ Lang::get('page.slash') }}</span>
        <a href="{{ URL::to('feedback') }}">{{ Lang::get('page.feedback') }}</a>
    </li>

</ul>
