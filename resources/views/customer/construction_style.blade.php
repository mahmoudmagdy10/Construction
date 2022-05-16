@extends('customer.layout.app')


@section('link')
<link rel="stylesheet" href="{{asset('css/upload/construct-style.css')}}">
<link rel="stylesheet" href="{{asset('css/all.min.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?display=swap&amp;family=Libre+Baskerville:400,700|Nunito:300,400,700" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap" rel="stylesheet"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

@section('title')
    Upload
@endsection

@section('profile')
  <img class=" rounded-circle shadow-1-strong me-3" src='{{asset("Profile_Picture/$customer->profile_picture")}}' alt="avatar" width="40" height="40" />
@endsection

@section('content')
<form class="arch" method="POST" action="{{ route('customer.upload') }}" enctype="multipart/form-data">
    @csrf
    <div class="constr">
        <h1>Architectural Styles</h1>
        <p>Choose with a unique selection of different architectural styles around the world</p>
        <div class="container">

            <div data-aos="fade-up" data-aos-delay="150" class="box">
                <div class="fram">
                    <iframe title="Petrovsky travel palace in Moscow" frameborder="0" allowfullscreen
                        mozallowfullscreen="true" webkitallowfullscreen="true"
                        allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                        execution-while-out-of-viewport execution-while-not-rendered web-share
                        src="https://sketchfab.com/models/8b877b1776794c139d80fd93999003f0/embed"> </iframe>
                </div>
                <div class="box-det">
                    <h3>italy<br> style</h3>
                    <p>Discover the Italian <br>architecture.</p>

                    <label>
                        <input type="radio" id="Italian" name="arch" value="Italian">
                        <span class="one">Italian</span>
                    </label>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="300" class="box">
                <div class="fram">
                    <iframe src="https://sketchfab.com/models/8b877b1776794c139d80fd93999003f0/embed"> </iframe>
                </div>
                <div class="box-det">
                    <h3>American<br> style</h3>
                    <p>Discover the American <br>architecture.</p>

                    <label>
                        <input type="radio" id="Italian" name="arch" value="American">
                        <span class="one">American</span>
                </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="450" class="box">
                <div class="fram">
                    <iframe title="Ndecor Design Dokuzer İnşaat 3D" frameborder="0" allowfullscreen
                        mozallowfullscreen="true" webkitallowfullscreen="true"
                        allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                        execution-while-out-of-viewport execution-while-not-rendered web-share
                        src="https://sketchfab.com/models/e4869a806dfa4efd9d480fda16990c52/embed"> </iframe>
                </div>
                <div class="box-det">
                    <h3>UK<br> style</h3>
                    <p>Discover the UK <br>architecture.</p>

                    <label>
                        <input type="radio" id="Italian" name="arch" value="UK">
                        <span class="one">UK</span>
                    </label>
                </div>
            </div>

        </div>
    </div>
    <!---->
    <!-- start 3d,2d  -->
    <div class="pro">

        <div class="tree">
            <div class="threedmodel">
                <h3>upload 3D model</h3>
                <input type="file" name="three_D" placeholder="please choose your 3d model " class="three">
            </div>
        </div>
        
        <div class="twod">
            <div class="twodmodel">
                <h3>upload 2D model</h3>
                <input type="file" name="file"  class="file">
            </div>
        </div>
    </div>

    <div class="go">
        <div class="container">
            <h2> Go</h2>
            <div class="to-p">
                <p>Please go to our app to predict the price of your house
                    and download a CSV file that predicted</p>
                <a href="#">go to app</a>
            </div>
        </div>
    </div>

    <!-- start csv  -->
    <div class="csv">
        <div class="container" data-aos="fade-up" data-aos-delay="500">
            <div class="csv-con">
                <h3>upload CSV file</h3>
                <input type="file" name="csv" placeholder="upload csv " class="csv-file">
            </div>
        </div>
    </div>

    <!-- end csv  -->

    <!-- start sav -->
    <div class="sav">
        <div class="container" data-aos="fade-up" data-aos-delay="750">
            <h2>save project
            </h2>
            <div class="sav-cont">
                <p>When you save the project, it will be published automatically and an<br> alert will be sent
                    to you when a contractor chooses the project to sign <br>the contract and agreement
                </p>
                <input type="submit" value="save">
                <!--back end her please wake up-->
            </div>
        </div>
    </div>
</form>
@endsection
@section('script')
<script src=" {{asset('js/upload/construction.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 550,
    });
</script>
@endsection