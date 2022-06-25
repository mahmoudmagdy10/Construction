@extends('customer.layout.app')

@section('link')
<link rel="stylesheet" href="{{asset('css/payment.css')}}">

@endsection

@section('title')
    Payment
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
<div class="login">
    <h3 class="payF"> Sorry , Select The Project that you will pay for from <span style="color:black">Your Project Page :) </span></h3>
</div>


@endsection
@section('script')
    <script src="{{asset('js/auth/pro.js')}}"></script>
@endsection
