@extends('contractor.layout.app')

@section('content')

<form class="form" action="{{route('contractor.update',$contractor->id)}}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="token" value = "{{$contractor->remember_token}}">                 
<div class="container">
    <div class="main-body">
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
                      <h6 class="mb-0">Country</h6>
                    </div>
                    <input class="col-sm-9 form-control" name="country" value = "{{$contractor->country}}">                    
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Company</h6>
                    </div>
                    <input class="col-sm-9 form-control" name="company" value = "{{$contractor->company}}">                    
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
