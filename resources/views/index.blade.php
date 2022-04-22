@extends('layouts.app')


@section('content')

<div class="carousel w-full">
    @foreach ($events as $event)

    <div id="{{ $event->id }}" class="carousel-item w-full">
        <img src="https://api.lorem.space/image/car?w=800&h=200&hash=8B7BCDC2" class="w-full" />
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