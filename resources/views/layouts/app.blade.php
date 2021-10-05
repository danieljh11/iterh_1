<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - ITE Nomina App</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>



  </head>
  <body>

    <nav class="flex py-5  bg-blue-800 text-whithe">
            <div class="w-1/2 px-12 mr-auto">
                <p class="text-2xl text-white font-bold ">iteRh</p>
            </div>

        <ul class="w-1/2 px-10 mr-auto flex text-white  justify-end pt-2">

        @if(auth()->check())
              <li  class="w-1  mr-auto flex justify-center rounded-md">
                  <a href="{{ route('empleados.index') }} "class=" font-bold
                      hover:bg-blue-900 py-3 px-4 rounded-md">Trabajadores</a>
                  <a href="{{ route('horario.index')}} "class=" font-bold
                  hover:bg-blue-900 py-3 px-4 rounded-md">Horario</a>
                  <a href="{{ route('nominas.index')}} "class=" font-bold
                  hover:bg-blue-900 py-3 px-4 rounded-md">Nomina</a>
                  <a href=" "class=" font-bold
                  hover:bg-blue-900 py-3 px-4 rounded-md">Asistencia</a>
              </li>
              <li class="mx-8 ">
                  <p class="text-xl">Bienvenido <b>{{auth()->user()->name}}</b></p>
              </li>
              <li>
                  <a href="{{ route('login.destroy') }}"class=" font-bold
                  hover:bg-blue-900 py-3 px-4 rounded-md">Log Out</a>
              </li>
        @else
              <li>
                <a href="{{ route('asistencias.index') }}" class=" font-semibold
                hover:bg-blue-900 py-3 px-4 rounded-md">Asistencia</a>
                  <a href="{{ route('login.index') }}" class=" font-semibold
                  hover:bg-blue-900 py-3 px-4 rounded-md">Log In</a>
                  <a href="{{ route('register.index') }}"class=" font-semibold
                  hover:bg-blue-900 py-3 px-4 rounded-md">Register</a>
              </li>

        @endif
        </ul>

        </nav>
        <main class="p-8 ">
            @yield('content')
        </main>



  </body>
</html>