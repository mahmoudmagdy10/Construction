<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>constructions</title>
        
        <link rel="stylesheet" href="{{asset('css/home/home.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

        @yield('link')

    </head>
    <body>
        <!-- start header  -->
        <header id="header">
            <div class="logo">
                <a href="#"><span>construction project</span></a>
            </div>
            <ul class="navigation">
                <li><a class="accept" href="{{route('contractor.homepage')}}">Home</a></li>
                <li><a href="{{route('contractor.explor')}}">Explor</a></li>
                <li><a href="{{route('contractor.your_project')}}">Your Project</a></li>
                <li><a href="project.html">Payment</a></li>
                <li class="icon_profile">
                    <div class ="pop_up">
                        <a href="{{ route('contractor.your_project') }}">My Projects</a>
                        <hr>
                        <a href="{{ route('contractor.profile') }}">Profile</a>
                        <hr>
                        <a href="{{ route('logout') }}">Log Out</a>
                    </div>
                </li>
            </ul>
            <div class="bars">
                <i id="bar" class="fas fa-bars"></i>
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