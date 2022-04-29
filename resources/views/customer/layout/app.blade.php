<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>constructions</title>
        
        <link rel="stylesheet" href="{{asset('css/auth/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/home/home.css')}}">
        <link rel="stylesheet" href="{{asset('css/construct-style/construct-style.css')}}">
        <link rel="stylesheet" href="{{asset('css/construct-style/normalise.css')}}">
        <link rel="stylesheet" href="{{asset('css/my_projects/construct-style-1.css')}}">
        <link rel="stylesheet" href="{{asset('css/my_projects/construct-style.css')}}">
        @yield('link')

    </head>
    <body>
    <!-- start header  -->
        <header id="header">
        <div class="logo">
            <a href="#"><span>construction project</span></a>
        </div>
        <ul class="navigation" class="kv-ee-menu kv-ee-menu-item-wrapper" data-dynamic-navigation-element="nav">
                <li><a class="accept" href="">Home</a></li>
                <li><a href="">upload</a></li>
                <li><a href="">My Projects</a></li>
                <li><a href="#">payement</a></li>
                <li class="icon_profile">
                    <div class ="pop_up">
                        <a href="">My Projects</a>
                        <hr>
                        <hr>
                        <a href="{{ route('logout') }}">Log Out</a>
                    </div>
                </li>
            </ul>
        <div class="bars">
            <i id="bar"class="fas fa-bars"></i>
        </div>
        </header>
    <!-- end header  -->
        <main>
            @yield('content')
        </main>
        <script src=" {{asset('js/home/adham.js')}}"></script>
        <script src=" {{asset('js/home/we.js')}}"></script>
        <script src=" {{asset('js/edit.js')}}"></script>
    </body>
</html>