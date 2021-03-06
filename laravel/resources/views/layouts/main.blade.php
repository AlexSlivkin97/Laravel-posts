<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @section('head')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@section('title') Главная @endsection</title>
        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/main.css"> 
        @show
    </head>
    <body>
        @section('header')
        <header class="p-3 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                    </a>
        
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
                        @if(!Session::has('id_user'))
                        <li><a href="{{route('login')}}" class="nav-link px-2 text-white">Авторизация</a></li>
                        <li><a href="{{route('registration')}}" class="nav-link px-2 text-white">Регистрация</a></li>
                        @else
                        <li><a href="{{route('logout')}}" class="nav-link px-2 text-white">Выйти</a></li>
                        @endif
                        <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                    </ul>
        
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                    </form>
        
                    <div class="text-end">
                        {{-- @if ($_SESSION['id'] == Null)
                        {{Form::open(['action'=>'App\Http\Controllers\Auth\AuthController@index', 'method' => 'GET'])}}
                        @csrf
                        {{Form::submit('Авторизация', ['class'=>'btn btn-outline-light me-2'])}}
                        {{Form::close()}}
                        {{Form::open(['action'=>'App\Http\Controllers\Auth\RegistrationController@index', 'method' => 'GET'])}}
                        @csrf
                        {{Form::submit('Регистрация', ['class'=>'btn btn-outline-light me-2'])}}
                        {{Form::close()}}                           
                        @else
                        {{Form::open(['action'=>'App\Http\Controllers\Auth\AuthController@logout', 'method' => 'GET'])}}
                        @csrf
                        {{Form::submit('Выйти', ['class'=>'btn btn-outline-light me-2'])}}
                        {{Form::close()}}
                        @endif --}}
                    </div>
                </div>
            </div>
        </header>
        @show
        @yield('content')
        <div class="container">
        </div>
        @section('footer')
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                    <span class="text-muted">© 2021 Company, Inc</span>
                </div>
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
                </ul>
            </footer>
        </div>
        @show
    </body>
</html>
