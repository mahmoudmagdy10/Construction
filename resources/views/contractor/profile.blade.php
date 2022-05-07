@extends('contractor.layout.app')

@section('link')
<link rel="stylesheet" href="{{asset('css/home/profile.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >

@endsection

@section('content')
<div class="container">
    <div class="main-body prof">
          <div class="">

            <div class="col-md-4 mb-3 ">
              <div class="card car-2">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center profile_picture">
                  @isset($contractor)
                    <div class="hover_picture">
                        <a class="hover_button" href="{{route('contractor.edit')}}">Change Picture</a>
                    </div>
                      <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle " width="150">
                    <div class="mt-3">
                      <h4>{{$contractor->name}}</h4>
                  @endisset
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-8">
              <div class="card mb-3 car-3">
                <div class="card-body">
                @isset($contractor)
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$contractor->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$contractor->email}}
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
                    {{$contractor->phone}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$contractor->address}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">National_ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$contractor->national_id}}
                    </div>
                  </div>
                  <hr>

                  <div class="row form-actions">
                    <div class="col-sm-6">
                      <a class="btn btn-danger " href="{{route('contractor.edit')}}">Edit</a>
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
@section('script')

<script src=" {{asset('js/home/edit.js')}}"></script>

@endsection