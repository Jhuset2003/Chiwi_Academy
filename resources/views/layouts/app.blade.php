<!DOCTYPE html>
<html data-theme="halloween" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Chowi Academy</title>
</head>

<body>
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </label>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href="{{ route('home') }}">Homepage</a></li>

                    @auth
                    <li><a href="{{ route('events') }}">Eventos</a></li>
                    <li><a>Adminsitrar eventos</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Cerrar sesión</button>
                        </form>
                    </li>
                    @endauth

                    @guest
                    <li><a href="{{ route('register') }}">Registrarse</a></li>
                    <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                    @endguest
                </ul>
            </div>
        </div>
        <div class="navbar-center">
            <a class="btn btn-ghost normal-case text-xl">Chowi Academy</a>
        </div>
        <div class="navbar-end">
            

            @auth

            <span>Hola, <span class="font-bold">{{ auth()->user()->name }}</span></span>
            @endauth
        </div>
    </div>

    <div class="w-full my-12 flex flex-col justify-center items-center sm:w-4/5 m-auto p-6 bg-secondary min-h-screen gap-8 rounded-xl">

        @yield('content')
    </div>

    <footer class="footer p-10 bg-neutral text-neutral-content">
        <div>
            <span class="footer-title">Services</span>
            <a class="link link-hover">Branding</a>
            <a class="link link-hover">Design</a>
            <a class="link link-hover">Marketing</a>
            <a class="link link-hover">Advertisement</a>
        </div>
        <div>
            <span class="footer-title">Company</span>
            <a class="link link-hover">About us</a>
            <a class="link link-hover">Contact</a>
            <a class="link link-hover">Jobs</a>
            <a class="link link-hover">Press kit</a>
        </div>
        <div>
            <span class="footer-title">Legal</span>
            <a class="link link-hover">Terms of use</a>
            <a class="link link-hover">Privacy policy</a>
            <a class="link link-hover">Cookie policy</a>
        </div>
    </footer>
</body>

</html>