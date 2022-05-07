@extends('customer.layout.app')

@section('link')
<link rel="stylesheet" href="{{asset('css/home/profile.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >

@endsection

@section('content')
<div class="container">
    <div class="main-body prof">
          <div class="">
            <div class="col-md-4 mb-3">
              <div class="card car-2">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                  @isset($customer)
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{$customer->name}}</h4>
                      <p class="text-secondary mb-1">{{$customer->phone}}</p>
                      <p class="text-muted font-size-sm">{{$customer->address}}</p>
                  @endisset
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-8">
              <div class="card mb-3 car-3">
                <div class="card-body">
                @isset($customer)
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$customer->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$customer->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    ***************
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$customer->phone}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$customer->address}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">National_ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$customer->national_id}}
                    </div>
                  </div>
                  <hr>

                  <div class="row form-actions">
                    <div class="col-sm-6">
                      <a class="btn btn-danger " href="{{route('customer.edit')}}">Edit</a>
                    </div>
                  </div>
                @endisset
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
@endsection