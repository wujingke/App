<ul class="nice-tabs">
	<li class="{{ (Request::segment(3)) ? '' : 'active' }}"><a href="{{ URL::to('u/' . 'Suzy') }}">{{ Lang::get('page.user_info') }}</a></li>
	<li class="{{ (Request::segment(3) == 'topics') ? 'active' : '' }}"><a href="{{ URL::to('u/' . 'Suzy' . '/topics') }}">{{ Lang::get('page.user_topics') }}</a></li>
	<li><a href="{{ URL::to('u/' . 'Suzy' . '/followers') }}">{{ Lang::get('page.user_follower') }}</a></li>
</ul>