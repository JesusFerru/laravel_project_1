<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos de programación Web</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class = "shadow-lg">
        <div class="bg-gray-900 py-1"></div>
            <nav class="bg-gray-800 py-2">
                <a href="{{ route('home') }}" >
                    <img src="{{asset('images/easyway.png' )}} " 
                    class="h-8 mx-auto"
                    >
                </a>
            </nav>
    </header>
    <main class= "py-10">
        <div class= "container mx-auto px-4">
            @yield('content')
        </div>
    </main>
    <footer>
        @auth

        @else

        @endif

        <div class="bg-gray-800 py-4 text-center text-white">
            <p>Desarrollado por <a href="https://www.youtube.com/c/Bluuweb" target="_blank" class="font-bold">Bluuweb</a></p>
        </div>
    </footer>
</body>
</html>