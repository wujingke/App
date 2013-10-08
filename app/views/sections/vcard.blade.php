<div class="vcard">

	<ul class="two_up tiles">
		<li class="nice-avatar">
			<span>{{ HTML::image($topic->user->profile->avatar_square_url) }}</span>
			<a href="{{ URL::to('user/follow?target=' . $topic->user->username) }}" class="btn-def btn-def-orange action-follow">{{ Lang::get('page.follow') }}</a>
		</li>
		<li>
			<p class="nickname">{{ $topic->user->profile->nickname }}</p>
			<p class="username">@<a href="">{{ $topic->user->username }}</a></p>
			<p class="join-on">2013／08／23 加入</p>

		</li>
	</ul>
	<ul class="three_up tiles person-status">
		<li><span><a href="">101</a></span><span>Followers</span></li>
		<li><span><a href="">101</a></span><span>Topics</span></li>
		<li><span><a href="">101</a></span><span>Following</span></li>
	</ul>

</div>