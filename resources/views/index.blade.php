@extends('layouts.app')


@section('content')

<div class="carousel w-full">
    @foreach ($events as $event)

    <div id="{{ $event->id }}" class="carousel-item w-full">
        <img src="http://2.bp.blogspot.com/-MggjlVM-q7w/VOe4ASjfF9I/AAAAAAAAACc/ifm1l_wwG5I/s1600/tics.gif" class="w-full" />
    </div>
    @endforeach

}
</div>
<div class="flex justify-center w-full py-2 gap-2">
    @foreach ($events as $event)
    <a href="#{{ $event->id }}" class="btn btn-xs"></a>
    @endforeach
</div>

@endsection