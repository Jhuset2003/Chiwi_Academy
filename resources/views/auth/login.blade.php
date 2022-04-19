@extends('layouts.app')


@section('content')



@if (session('status'))
<div class="alert alert-error shadow-lg flex justify-center items-center max-w-xs">
    <div class="flex justify-center items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span class="text-center">{{session('status')}}</span>
    </div>
</div>
@endif
<h1 class="font-bold text-xl">Login</h1>

<form action="{{ route('login') }}" method="post" class="flex flex-col justify-center items-center gap-4">
    @csrf

    <input value="{{ old('email') }}" type="email" placeholder="Email" name="email" class="input w-full max-w-xs @error('email') input-bordered input-error @enderror">
    @error('email')
    <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror

    <input type="password" placeholder="Password" name="password" class="input w-full max-w-xs @error('password') input-bordered input-error @enderror">
    @error('password')
    <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror

    <div>
        <input type="checkbox" name="remember" id="remember">
        <label class="text-sm">Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Iniciar sesión</button>

</form>

@endsection