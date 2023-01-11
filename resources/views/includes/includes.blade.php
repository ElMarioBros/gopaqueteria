<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    @auth
    @if(Auth::user()['type'] == 'admin')
    @else
        <div class="w-52 m-auto" style="">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a href="#" onclick="this.closest('form').submit()" class="
                inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out m-6
                " role="menuitem">
                    Cerrar Sesión
                </a>
            </form>
        </div>
    @endif
    @endauth
    @yield('content')
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</body>
</html>