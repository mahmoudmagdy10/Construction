@extends('customer.layout.app')

@section('link')
<link rel="stylesheet" href="{{asset('css/home/profile.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >

@endsection

@section('content')

<form class="form" action="{{route('customer.update')}}" method="POST" enctype="multipart/form-data">
  @csrf
<div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-8">
              <div class="card mb-9 car">
                <div class="card-body bodies">
                @isset($customer)
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <input class="col-sm-6 form-control" name="name" value = "{{$customer->name}}">                 
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <input class="col-sm-6 form-control" name="email" value = "{{$customer->email}}" readOnly>                 
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
                    <input class="col-sm-9 form-control" name="phone" value = "{{$customer->phone}}">                    
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <input class="col-sm-9 form-control" name="address" value = "{{$customer->address}}">                    
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">National_ID</h6>
                    </div>
                    <input class="col-sm-9 form-control" name="national_id" value = "{{$customer->national_id}}">                    
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