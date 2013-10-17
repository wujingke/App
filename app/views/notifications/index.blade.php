@extends('layouts.master')

@section('app')

@unless ($notifications->getTotal())

<div class="nice-notice">
    <p>{{ Lang::get('app.no_notify') }}</p>
</div>

@endunless

<ul class="notifications">

    @foreach($notifications as $notification)

    <li>
    	{{ $notification->content }}
    	<span class="check-read" data-url="{{ URL::to('notification/' . $notification->id) }}"><i class="icon-check"></i></span>
    </li>

    @endforeach

</ul>

{{ $notifications->links() }}

@stop

@section('sidebar')

    <div class="nice-box">

    	<div class="tips">
    		<blockquote>
    			<p>{{ Lang::get('tip.mark_notification') }}</p>
    		</blockquote>
    	</div>

    </div>

@stop
