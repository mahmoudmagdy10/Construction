@extends('contractor.layout.app')

@section('link')
<link rel="stylesheet" href="{{asset('css/home/profile.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >

@endsection

@section('content')

<form class="form" action="{{route('contractor.update')}}" method="POST" enctype="multipart/form-data">
  @csrf
<div class="container">
    <div class="main-body">
      <div class="col-md-4 mb-3 ">

            <div class="card car-2">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center profile_picture">
                @isset($contractor)
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle " width="150">
                  <div class="mt-3">
                    <h4>{{$contractor->name}}</h4>
                @endisset
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row gutters-sm">
            <div class="col-md-8">
              <div class="card mb-9 car">
                <div class="card-body bodies">
                @isset($contractor)
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <input class="col-sm-6 form-control" name="name" value = "{{$contractor->name}}">                 
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <input class="col-sm-6 form-control" name="email" value = "{{$contractor->email}}" readOnly>                 
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <input class="col-sm-9 form-control" name="password" placeholder="Type Old Password OR New Password" >                    
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <input class="col-sm-9 form-control" name="phone" value = "{{$contractor->phone}}">                    
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <input class="col-sm-9 form-control" name="address" value = "{{$contractor->address}}">                    
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">National_ID</h6>
                    </div>
                    <input class="col-sm-9 form-control" name="national_id" value = "{{$contractor->national_id}}">                    
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
@endsection
