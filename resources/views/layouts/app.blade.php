<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel App</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </head>
  <body class="bg-gray-100 text-gray-800">

    <nav class="flex py-3 bg-indigo-500 text-white">
      <div class="w-1/2 px-5 mr-auto">
        <img src="{{ asset('img/logo.png') }}" width="50px" alt="">
      </div>

      <ul class="w-1/2 px-15 ml-auto flex justify-end pt-1">
        <li li class="nav-item mx-4">
            <a class="nav-link" href="{{ route('vistas.index') }}">{{ __('vista') }}</a>
        </li>
      @if(auth()->check())
        
        <li class="mx-8">
          <p class="text-xl" style="color: #eeeeee;">Bienvenido <b>{{ auth()->user()->name }}</b></p>
        </li>
        <li>
          <a href="{{ route('login.destroy') }}" class="font-bold
          py-3 px-4 rounded-md bg-red-500 hover:bg-red-600" style="color: #eeeeee;">Cerrar Sesion</a>
        </li>
      @else
        <li class="mx-6">
          <a href="{{ route('login.index') }}" class="font-semibold 
          hover:bg-indigo-700 py-3 px-4 rounded-md" style="color: #eeeeee;">Iniciar sesion</a>
        </li>
        <li>
          <a href="{{ route('register.index') }}" class="font-semibold
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700" style="color: #000000;">Registar</a>
        </li>
      @endif
      </ul>

    </nav>


    @yield('content')


    <br><br><br><br>

    <footer class="py-2 bg-indigo-600 text-white border-white py-2 px-4 rounded-md">
      <h2>Proyecto Final</h2>
      <p>Gerson Chan Marin</p>
      <p>Carlos Daniel Francisco Bot??n</p>
    </footer>

  </body>
</html>