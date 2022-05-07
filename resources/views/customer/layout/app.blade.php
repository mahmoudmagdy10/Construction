<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>constructions</title>
        
        <link rel="stylesheet" href="{{asset('css/home/home.css')}}">
        @yield('link')

    </head>
    <body>
    <!-- start header  -->
        <header id="header">
        <div class="logo">
            <a href="#"><span>construction project</span></a>
        </div>
        <ul class="navigation" class="kv-ee-menu kv-ee-menu-item-wrapper" data-dynamic-navigation-element="nav">
                <li><a class="accept" href="{{route('customer.homepage')}}">Home</a></li>
                <li><a href="{{route('customer.construction_style')}}">Upload</a></li>
                <li><a href="{{route('customer.your_project')}}">My Projects</a></li>
                <li><a href="#">payement</a></li>
                <li class="icon_profile">
                    <div class ="pop_up">
                    <a href="{{ route('customer.your_project') }}">My Projects</a>
                        <hr>
                        <a href="{{ route('customer.profile') }}">Profile</a>
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
        @yield('script')
        <script src=" {{asset('js/home/home.js')}}"></script>
        <script src=" {{asset('js/home/edit.js')}}"></script>
    </body>
</html>