@extends('customer.layout.app')

@section('link')
<link rel="stylesheet" href="{{asset('css/your project.css')}}">
<link rel="stylesheet" href="{{asset('css/all.min.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300&family=Nunito+Sans:wght@300;400&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap"rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300&family=Nunito+Sans:wght@300;400&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Work+Sans:wght@200;300;500;600;700;800&display=swap"rel="stylesheet" />
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

@section('content')

<div class="title">
    <div class="container">
        <div class="info">
            <h3>Your project</h3>
        </div>
        <div class="projects">
        @isset($customer)
          @foreach($project as $pro)
            <div data-aos="fade-up" data-aos-delay="150" class="card">
                <div class="box">
                    <div class="det">
                        <a href="{{route('customer.details',$pro->id)}}"><img src="{{asset('image-home/house2.jpg')}}" alt="" /></a>
                        <ul>
                            <a href="{{route('customer.details',$pro->id)}}"><h3>House</h3></a><br>
                            <li>Architecture : {{$pro->arch}}</li>
                            <li>Publish at : {{$pro->created_at->format('d-m-Y')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        @endisset
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 550,
    });
</script>
@endsection