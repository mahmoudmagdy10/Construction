@extends('contractor.layout.app')

@section('link')
<link rel="stylesheet" href="{{asset('css/your project.css')}}">
<link rel="stylesheet" href="{{asset('css/all.min.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300&family=Nunito+Sans:wght@300;400&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap"rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300&family=Nunito+Sans:wght@300;400&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap"rel="stylesheet" />
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

@section('title')
    Your Project
@endsection

@section('profile')
  <img class=" rounded-circle shadow-1-strong me-3" src='{{asset("Profile_Picture/$contractor->profile_picture")}}' alt="avatar" width="40" height="40" />
@endsection

@section('content')

<div class="title">
    <div class="container">
        <div class="info">
            <h3>Your project</h3>
        </div>
        <div class="projects">
        @isset($contractor)
          @foreach($project as $pro)
            <div data-aos="fade-up" data-aos-delay="150" class="card">
                <div class="box">
                    <div class="det">
                    @if($pro->arch === 'Italian')
                        <div class="fram">
                          <iframe title="Petrovsky travel palace in Moscow" frameborder="0" allowfullscreen
                              mozallowfullscreen="true" webkitallowfullscreen="true"
                              allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                              execution-while-out-of-viewport execution-while-not-rendered web-share
                              src="https://sketchfab.com/models/8b877b1776794c139d80fd93999003f0/embed"> </iframe>
                        </div>
                        @endif
                        @if($pro->arch === 'American')
                        <div class="fram">
                          <iframe src="https://sketchfab.com/models/8b877b1776794c139d80fd93999003f0/embed"> </iframe>
                        </div>
                        @endif
                        @if($pro->arch === 'UK')
                        <div class="fram">
                          <iframe title="Ndecor Design Dokuzer İnşaat 3D" frameborder="0" allowfullscreen
                              mozallowfullscreen="true" webkitallowfullscreen="true"
                              allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                              execution-while-out-of-viewport execution-while-not-rendered web-share
                              src="https://sketchfab.com/models/e4869a806dfa4efd9d480fda16990c52/embed"> </iframe>
                        </div>
                        @endif
                        <ul>
                            <a href="{{route('contractor.details',$pro->id)}}"><h3>House</h3></a><br>
                            @foreach($pro->props as $prop)
                            <li style="color :red; font-weight:bold">Predict Price : {{ number_format($prop->PREDICTION, 2) }} $</li>
                            @endforeach   
                            <li>Publish at :  {{$pro->created_at->format('d-m-Y')}}</li>

                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        @endisset
@endsection
@section('script')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 550,
    });
</script>
@endsection