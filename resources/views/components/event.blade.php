@props(['event' => $event])

<div class="card w-72 sm:w-96 bg-base-100 shadow-xl">
    <div class="card-body">
        <h2 class="card-title">{{ $event->name }}</h2>
        <h2 class="font-bold">Creado por: {{ $event->user->name }}</h2>
        <p>{{ $event->description }}</p>
        <p>{{ $event->date }}</p>
        <p>{{ $event->tickets->count() }}/{{ $event->max_capability }} asistencias.</p>
        <a href="{{ $event->link }}">Entrar al evento</a>
        <div class="card-actions justify-end">
            @if ($event->tickets->where('user_id', auth()->id())->count())
            <form action="{{ route('events.assist', $event->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-warning">No asistir</button>
            </form>
            @else
            <form action="{{ route('events.assist', $event->id) }}" method="post">
                @csrf
                @if ($event->isAssistable())
                <button type="submit" class="btn btn-primary">Asistir</button>

                @else
                <button type="submit" class="btn" disabled="disabled">Asistir</button>
                @endif
            </form>

            @if ($event->ownedBy(auth()->user()))
            <form action="{{ route('events.destroy', $event) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-error">Eliminar evento</button>
            </form>
            @endif
            @endif
        </div>
    </div>
</div>