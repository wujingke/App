<ul class="nice-tabs">
	<li><a href="{{ URL::to('settings/profile') }}">{{ Lang::get('page.my_profile') }}</a></li>
	<li><a href="{{ URL::to('settings/avatar') }}">{{ Lang::get('page.update_avatar') }}</a></li>
	<li class="active"><a href="{{ URL::to('settings/password') }}">{{ Lang::get('page.edit_password') }}</a></li>
</ul>