<ul class="nice-tabs">
	@foreach($nodes as $node)
	<li class="{{ (Request::segment(2) == $node->pretty) ? 'active' : 'nil' }}">
		<a href="{{ URL::to('node/' . $node->pretty) }}">{{ $node->name }}<span>{{ $node->topics->count() }}</span></a>
	</li>
	@endforeach
</ul>