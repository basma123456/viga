
@extends('site.layouts.master')
@section('title')
Viganella
@endsection
  <!----- Start Main Section ----->

  @section('content')


  <!-----  Start Cart Section   ----->

  <section id="splash-screen" class="d-flex justify-content-center align-items-center flex-column py-5">
    <p class="uk-text-bolder fs-1 pt-5 pb-3 mt-5" style="color:black">Order Placed Successfully</p>
    <a class="d-block text-main uk-text-bold fs-3 pb-5" href="{{route('app.home')}}">Go Back to Shopping<i class="fa-solid fa-arrow-right fs-2 ps-5 text-second"></i></a>
  </section>


  <!-----  End Cart Section   ----->


@endsection









