<ul class="status">
	<li>
		<span>{{ Lang::get('page.topic') }}(10)</span>
		<span>{{ Lang::get('page.slash') }}</span>
		<span>{{ Lang::get('page.node') }}({{ $nodes->count() }})</span>
		<span>{{ Lang::get('page.slash') }}</span>
		<span>{{ Lang::get('page.user') }}(123)</span>
	</li>
	<li>
		<span>
			{{ Lang::get('page.site_t') }}
			{{ Auth::user()->id }}
			{{ Lang::get('page.o_user') }}
		</span>
		@if(Auth::user()->staff)
			<span>{{ Lang::get('page.slash') }}</span>
			<a href="">[ {{ Lang::get('page.add_node') }} ]</a>
		@endif
	</li>
	<li>
		<a href="">{{ Lang::get('page.help') }}</a>
		<span>{{ Lang::get('page.slash') }}</span>
		<a href="">{{ Lang::get('page.contact') }}</a>
		<span>{{ Lang::get('page.slash') }}</span>
		<a href="">{{ Lang::get('page.feedback') }}</a>
	</li>
</ul>
