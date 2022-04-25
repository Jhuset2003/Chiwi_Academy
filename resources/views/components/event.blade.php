@props(['event' => $event])

<div class="card w-72 sm:w-96 bg-base-100 shadow-xl">
    <div class="card-body">
        <h2 class="card-title">{{ $event->name }}</h2>
        <h2 class="font-bold">Creado por: {{ $event->user->name }}</h2>
        <p>{{ $event->description }}</p>

        @if (Carbon\Carbon::parse($event->date)->lt(Carbon\Carbon::now()))
        <p class="text-red-500 line-through">{{ $event->date }}</p>

        @else
        <p class="text-green-500">{{ $event->date }}</p>
        @endif


        @if ($event->isAssistable())
        <p class="font-bold text-green-500">{{ $event->tickets->count() }}/{{ $event->max_capability }} asistencias.</p>

        @else
        <p class="font-bold text-red-500">{{ $event->tickets->count() }}/{{ $event->max_capability }} asistencias.</p>

        @endif

        @if ($event->tickets->where('user_id', auth()->id())->count())
        <a class="underline underline-offset-4 font-bold text-sky-500 hover:text-sky-400" href="{{ $event->link }}">Entrar al evento</a>
        @endif

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
                @if ($event->isAssistable() && !Carbon\Carbon::parse($event->date)->lt(Carbon\Carbon::now()))
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