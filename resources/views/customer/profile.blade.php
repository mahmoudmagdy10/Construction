@extends('customer.layout.app')

@section('link')
<link rel="stylesheet" href="{{asset('css/home/profile.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >

@endsection

@section('title')
    Profile
@endsection

@section('profile')
  @if($customer->profile_picture !== NULL)
  <img class=" rounded-circle shadow-1-strong me-3" src='{{asset("Profile_Picture/$customer->profile_picture")}}' alt="avatar" width="40" height="40" />
  @endif
  @if($customer->profile_picture == NULL)
  <img class=" rounded-circle shadow-1-strong me-3" src='{{asset("image-home/profile.jpg")}}' alt="avatar" width="40" height="40" />
  @endif
@endsection
@section('content')
<div class="container">
    <div class="main-body prof">
      @isset($customer)

          <div class="parent">
              <div class="img-person">
                @if($customer->profile_picture !== null)
                <img class="profile_picture" src='{{asset("Profile_Picture/$customer->profile_picture")}}' alt="" />
                @endif
                @if($customer->profile_picture == null)
                <img src="{{asset('image-home/profile.jpg')}}" alt="" />
                @endif
                <div class="caption">
                <a class="btn btn-danger " href="{{route('customer.edit')}}">Upload</a>
                </div>
              </div>
            </div>

            <div class="profile_info">
                <div class="row-container">
                  <div class="prop">
                    <h6 class="">Full Name</h6>
                  </div>

                  <div class="value">
                  {{$customer->name}}
                  </div>
                </div>
                <hr>

                <div class="row-container">
                  <div class="prop">
                    <h6 class="">Email </h6>
                  </div>

                  <div class="value">
                  {{$customer->email}}
                  </div>
                </div>
                <hr>
                <div class="row-container">
                  <div class="prop">
                    <h6 class="">Address</h6>
                  </div>

                  <div class="value">
                  {{$customer->address}}
                  </div>
                </div>
                <hr>
                <div class="row-container">
                  <div class="prop">
                    <h6 class="">National ID</h6>
                  </div>

                  <div class="value">
                  {{$customer->national_id}}
                  </div>
                </div>
                <hr>
                <div class="row-container">
                  <div class="prop">
                    <h6 class="">Phone</h6>
                  </div>

                  <div class="value">
                  {{$customer->phone}}
                  </div>
                </div>
                <hr>

                <div class=" form-actions">
                    <a class="btn btn-danger " href="{{route('customer.edit')}}">Edit</a>
                </div>
              @endisset
            </div>


        </div>
    </div>
@endsection
