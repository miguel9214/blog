<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    {{-- Esto sirve para agregar estilos css y js a mis archivos --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container px-4 mx-auto">

        <header class="flex items-center justify-between py-4">
            <div class="flex items-center flex-grow gap-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/blog.png') }}" class="h-12" alt="">
                </a>
                <form action="{{route('home')}}" method="GET" class="flex-grow">
                    <input type="text" placeholder="Buscar" name="search" value="{{request('search')}}"
                    class="w-1/2 px-4 py-2 border border-gray-200 rounded">
                </form>
            </div>
            {{-- Con eso verifico si he iniciado sesion o no --}}

            @auth
                <a href="{{ route('dashboard') }}">Inicio</a>
            @else
                <a href="{{ route('login') }}"  class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Iniciar sesion</a>
            @endauth
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Resgistro</a>
        </header>

        <div class="h-px mb-8 opacity-60"
            style="
             background: linear-gradient(to right,
           rgba(200,200,200,0) 0%,
           rgba(200,200,200,1) 30%,
           rgba(200,200,200,1) 70%,
           rgba(200,200,200,0) 100%
            );
             ">
        </div>

        @yield('content')

    </div>
    <p class="py-16 ">
        <img src="{{ asset('images/blog.png') }}" class="h-12 mx-auto">
    </p>

</body>

</html>
