
@extends('site.layouts.master')
@section('title')
Viganella
@endsection

<style>
    .conf {
        text-align: center;
        text-decoration: none;
        color:black;

    }
    .conf:hover{
            color : white;
            text-decoration: none;
        }

</style>
  <!----- Start Main Section ----->


  @section('content')
  @if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

  <!-----  Start Profile Section   ----->

  <section class="mb-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <i class="fa-solid fa-arrow-left fs-2 pe-5 pt-5 text-second"></i>
          <p class="uk-text-bold fs-4 pt-1" style="color:black">
            Hello, Mohamed
          </p>

          <form class="mt-4 row pb-5 mb-5" method="POST" action="{{route('app.updateProfile')}}">
            @csrf
            {{method_field('post')}}
            <div class="form-floating col-5 offset-1" style="color:black">
              <input type="text" class="form-control border-main rounded-3" name="full_name" id="yourname" value="{{auth()->user()->full_name}}" placeholder="Your Name:">
              <label class="ps-4 pt-2" for="yourname">Your Name</label>
            </div>
            <div class="form-floating col-5" style="color:black">
              <input type="text" class="form-control border-main rounded-3" name="street_name" id="location" value="{{auth()->user()->street_name}}" placeholder="Location">
              <label class="ps-4 pt-2" for="location">Location</label>
            </div>
            <div class="form-floating col-5 offset-1 mt-4" style="color:black">
              <input type="text" class="form-control border-main rounded-3" name="phone_number" id="number" value="{{auth()->user()->phone_number}}" placeholder="Saved Numbers">
              <label class="ps-4 pt-2" for="number">Saved Numbers</label>
            </div>
            <div class="form-floating col-5 mt-4" style="color:black">
              <input type="text" class="form-control border-main rounded-3" name="landmark" id="address" value="{{auth()->user()->landmark}}" placeholder="Saved Address">
              <label class="ps-4 pt-2" for="address">Saved Address</label>
            </div>
            <div class="form-floating col-5 offset-1  mt-4" style="color:black">
              <input type="password" class="form-control border-main rounded-3" name="password" id="password" placeholder="Enter Passeord">
              <label class="ps-4 pt-2" for="password">Password</label>
            </div>
            <div class="form-floating col-5 mt-4" style="color:black">
              <input type="password" class="form-control border-main rounded-3" name="confirm_password" id="confirm_password" placeholder="Enter Confirm Passeord">
              <label class="ps-4 pt-2" for="confirm_password">Confirm Password</label>
            </div>
            <button type="submit" class="btn-logo w-25 mx-auto mt-5">
              Confirm Changes
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-----  End Profile Section   ----->


@endsection









