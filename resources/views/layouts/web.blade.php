<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos de programación</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="shadow-lg">
        <div class="relative bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
              <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                  <a href="#">
                    <span class="sr-only">AgueroDev</span>
                    <a href="{{ route('home') }}">
                        <img class="h-8 w-auto sm:h-12" src="{{ asset('images/logo.png') }}" alt="Logo Aguero dev">
                    </a>
                  </a>
                </div>
                <div>
                    <ul class="flex">
                        <a href="{{ route('home') }}" class="hover:bg-purple-100 mr-4 p-2 rounded-sm"><li class=" uppercase">Inicio</li></a>
                        <a href="" class="hover:bg-purple-100 mr-4 p-2 rounded-sm"><li class=" uppercase">Sobre nosotros</li></a>
                        <a href="" class="hover:bg-purple-100 mr-4 p-2 rounded-sm"><li class=" uppercase">Contacto</li></a>
                        @auth
                            <a href="{{ route('courses.index') }}" class="bg-purple-600 text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50 rounded-md p-2 uppercase">
                                publica tu curso
                            </a> 
                            
                        @endauth           
                    </ul>   
                </div>
                
            </div>
    </header>
    <main class="py-10">

        <div class="container mx-auto px-4">

            @yield('content')

        </div>

    </main>


    <footer class="py-4 text-center">
        @auth
            <a href="{{url('dashboard')}}" class="text-sm text-gray-700 underline"> 
                DashBoard
            </a>
        @else
            <a href="{{url('login')}}" class="text-sm text-gray-700 underline"> 
                Login
            </a>  
            <a href="{{url('register')}}" class="ml-4 text-sm text-gray-700 underline"> 
                Register
            </a>
        @endauth

    </footer>
</body>
</html>