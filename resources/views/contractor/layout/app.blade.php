<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link rel="icon" href="{{ url('image-home/logo.jpeg') }}">

        <link rel="stylesheet" href="{{asset('css/home/home.css')}}">
        <link rel="stylesheet" href="{{asset('css/header.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

        @yield('link')

    </head>
    <body>
        <!-- start header  -->
        <header id="header">
        <div class="logo">
            <a href="{{route('contractor.homepage')}}"><img src='{{asset("image-home/logo.jpeg")}}'/></a>
        </div>
        <ul class="navigation">
            <li><a class="accept" href="{{route('contractor.homepage')}}" value = "Home">Home</a></li>
            <li><a href="{{route('contractor.explor')}}" value = "Explor">Explor</a></li>
            <li><a href="{{route('contractor.your_project')}}" value = "Your Project">Your Project</a></li>
            <li><a href="project.html" value = "Payment">Payment</a></li>
            <li class="icon_profile">
                @yield('profile')
            </li>
            <li>
                <div class="arrow-up"></div>
                <div class ="pop_up">
                    <a href="{{ route('contractor.interested_projects') }} " value = "My Projects">Interested In </a>
                    <hr>
                    <a href="{{ route('contractor.profile') }}" value = "Profile">Profile</a>
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
        <script src=" {{asset('js/header.js')}}"></script>
        <script src=" {{asset('js/home/home.js')}}"></script>
        <script src=" {{asset('js/home/edit.js')}}"></script>
        
    </body>
</html>