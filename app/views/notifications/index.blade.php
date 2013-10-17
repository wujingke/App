@extends('layouts.master')

@section('app')

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

    </div>

@stop
