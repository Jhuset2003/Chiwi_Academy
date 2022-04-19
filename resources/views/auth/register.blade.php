@extends('layouts.app')


@section('content')

<h1 class="font-bold text-xl">Registrar</h1>

<form action="{{ route('register') }}" method="post" class="flex flex-col justify-center items-center gap-4">
    @csrf

    <input value="{{ old('name') }}" type="text" placeholder="Name" name="name" class="input w-full max-w-xs @error('name') input-bordered input-error @enderror">
    @error('name')
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror

    <input value="{{ old('email') }}" type="email" placeholder="Email" name="email" class="input w-full max-w-xs @error('email') input-bordered input-error @enderror">
    @error('email')
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror

    <input type="password" placeholder="Password" name="password" class="input w-full max-w-xs @error('password') input-bordered input-error @enderror">
    @error('password')
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror

    <input type="password" placeholder="Repeat password" name="password_confirmation" class="input w-full max-w-xs @error('password_confirmation') input-bordered input-error @enderror">
    @error('password_confirmation')
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-primary">Registrarme</button>

</form>

@endsection