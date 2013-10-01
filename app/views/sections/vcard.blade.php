<div class="vcard">

	<ul class="two_up tiles">
		<li>
			<ul>
				<li><i class="icon-user"></i>{{ $topic->user->profile->nickname }}</li>
			</ul>
		</li>
		<li class="nice-avatar">
			<span>{{ HTML::image($topic->user->profile->avatar_square_url) }}</span>
		</li>
	</ul>

</div>