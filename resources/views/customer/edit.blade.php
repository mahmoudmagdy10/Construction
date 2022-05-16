@extends('customer.layout.app')

@section('link')
<link rel="stylesheet" href="{{asset('css/home/profile.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >

@endsection

@section('title')
    Edit
@endsection

@section('profile')
  <img class=" rounded-circle shadow-1-strong me-3" src='{{asset("Profile_Picture/$customer->profile_picture")}}' alt="avatar" width="40" height="40" />
@endsection

@section('content')

<div class="forms_container">
  <form class="form-1" action="{{route('customer.profile_picture')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
      <div class="parent">
        <div class="img-person">
          @if($customer->profile_picture !== null)
          <img class="profile_picture" src='{{asset("Profile_Picture/$customer->profile_picture")}}' alt="" />
          @endif
          @if($customer->profile_picture == null)
          <img src="{{asset('image-home/profile.jpg')}}" alt="" />
          @endif
          <div class="caption">
            <input type="file" class="form-control btn-success"  name="photo" aria-label="Select Profile Picture" >
            <input type="submit" class="form-control save_profile" value="Save" >  
          </div>
        </div>
      </div>
    </div>
  </form>

  <form class="form-2" action="{{route('customer.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
      <div class="main-body">
        <div class="col-md-4 mb-3 ">

            <div class="row gutters-sm">
              <div class="col-md-8">
                <div class="card mb-9 car">
                  <div class="card-body bodies">

                  @if(session()->has('success'))
                  <div class="alert alert-success">
                      {{ session()->get('success') }}
                  </div>
                  @endif

                  @isset($customer)
                    <div class="input-group mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                      </div>
                      <div class="input-group-prepend ">
                        <span class="input-group-text info_icons" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                      </div>
                      <input class="col-sm-6 form-control" name="name" value = "{{$customer->name}}">
                      @error('name')
                        <small class="" >{{$message}}</small>
                      @enderror
                    </div>
                    <br>

                    <div class="input-group mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                      </div>
                      <div class="input-group-prepend ">
                        <span class="input-group-text info_icons" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                      </div>
                      <input class="col-sm-6 form-control" name="email" value = "{{$customer->email}}" readOnly>
                      @error('email')
                        <small class="" >{{$message}}</small>
                      @enderror
                    </div>
                    <br>

                    <div class="input-group mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Password</h6>
                      </div>
                      <div class="input-group-prepend ">
                        <span class="input-group-text info_icons" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                      </div>
                      <input class="col-sm-9 form-control" name="password" placeholder="Type Old Password OR New Password" >
                      @error('password')
                        <small class="" >{{$message}}</small>
                      @enderror
                    </div>
                    <br>

                    <div class="input-group mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Phone</h6>
                      </div>
                      <div class="input-group-prepend ">
                        <span class="input-group-text info_icons" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                      </div>
                      <input class="col-sm-9 form-control" name="phone" value = "{{$customer->phone}}">
                      @error('phone')
                        <small class="" >{{$message}}</small>
                      @enderror
                    </div>
                    <br>

                    <div class="input-group mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Address</h6>
                      </div>
                      <div class="input-group-prepend ">
                        <span class="input-group-text info_icons" id="basic-addon1"><i class="fa fa-globe" aria-hidden="true"></i></span>
                      </div>
                      <input class="col-sm-9 form-control" name="address" value = "{{$customer->address}}">
                      @error('address')
                        <small class="" >{{$message}}</small>
                      @enderror
                    </div>
                    <br>

                    <div class="input-group mb-3">
                      <div class="col-sm-3">
                        <h6 class="mb-0">National ID</h6>
                      </div>
                      <div class="input-group-prepend ">
                        <span class="input-group-text info_icons" id="basic-addon1"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
                      </div>
                      <input class="col-sm-9 form-control" name="national_id" value = "{{$customer->national_id}}">
                      @error('national_id')
                        <small class="" >{{$message}}</small>
                      @enderror
                    </div>
                    <br>

                    <div class="form-actions">
                      <button type="button" class="btn btn-warning mr-1"
                              onclick="history.back();">
                          <i class="ft-x"></i> Back
                      </button>
                      <button type="submit" class="btn btn-primary">
                          <i class="la la-check-square-o"></i> Update
                      </button>
                  </div>
                  @endisset
                  </div>
                </div>
              </div>
            </div>

          </div>
      </div>
    </div>
  </form>
</div>
@endsection