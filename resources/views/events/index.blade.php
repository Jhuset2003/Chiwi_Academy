@extends('layouts.app')


@section('content')

<h2 class="text-3xl font-bold">Crear nuevo evento</h2>
<form class="flex flex-col justify-center items-center gap-4" action="{{ route('events') }}" method="post">
    @csrf

    <input value="{{ old('name') }}" type="text" placeholder="Nombre del evento" name="name" class="input w-full max-w-xs @error('name') input-bordered input-error @enderror">
    @error('name')
    <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror

    <input value="{{ old('date') }}" type="datetime-local" placeholder="Fecha del evento" name="date" class="input w-full max-w-xs @error('date') input-bordered input-error @enderror">
    @error('date')
    <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror

    <input value="{{ old('max_capability') }}" type="number" placeholder="Capacidad máxima" name="max_capability" class="input w-full max-w-xs @error('max_capability') input-bordered input-error @enderror">
    @error('max_capability')
    <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror

    <input type="text" placeholder="Link sesión" name="link_session" class="input w-full max-w-xs @error('link_session') input-bordered input-error @enderror">
    @error('link_session')
    <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror

    <input type="file" accept="image/png, image/jpeg" placeholder="Subir imagen" name="upload_image" class="input w-full max-w-xs @error('upload_image') input-bordered input-error @enderror">
    @error('upload_image')
    <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror

    <textarea placeholder="Descripción" id="description" row="20" cols="30" name="description" class="textarea rounded-lg @error('description') textarea-error @enderror"></textarea>
    @error('description')
    <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-primary">Crear evento</button>



</form>


<h2 class="text-3xl font-bold">Próximos eventos:</h2>

<div class="flex justify-center items-center flex-wrap w-full gap-4">

    @if ($events->count())
    @foreach ($events as $event)
    <x-event :event="$event" />
    @endforeach


    @else
    <p class="text-center">No hay eventos creados</p>
    @endif
    {{ $events->links('pagination::bootstrap-4') }}

</div>

@if ($pastEvents->count())
<h2 class="text-3xl font-bold">Eventos pasados:</h2>

<div class="flex justify-center items-center flex-wrap w-full gap-4">

    @foreach ($pastEvents as $event)
    <x-event :event="$event" />
    @endforeach

    {{ $pastEvents->links('pagination::bootstrap-4') }}

</div>
@endif


@endsection