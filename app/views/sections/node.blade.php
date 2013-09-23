<ul class="nodes">
	@foreach($nodes as $node)
	<li>
		<a href="">{{ $node->name }}<span>4</span></a>
	</li>
	@endforeach
	<li class="active"><a href="">Node on Sails<span>1</span></a></li>
</ul>