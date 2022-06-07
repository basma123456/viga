
@extends('site.layouts.master')
@section('title')
Viganella
@endsection
  <!----- Start Main Section ----->

  @section('content')

  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

  <header id="main-slider" class="position-relative">
    <div class="uk-inline h-100">
        <div class="h-100" uk-slider="autoplay: true">
            <div class="uk-slider-container p-0 h-100">
                <ul class="uk-slider-items uk-child-width-1-1 h-100">
{{--                    <li>--}}
{{--                        <img class="h-100 w-100" src="{{asset('site-assets/assets/img/main-2.png')}}" alt="viganella">--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <img class="h-100 w-100" src="{{asset('site-assets/assets/img/main-1.png')}}" alt="viganella">--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <img class="h-100 w-100" src="{{asset('site-assets/assets/img/main-3.png')}}" alt="viganella">--}}
{{--                    </li>--}}

                    @foreach($sliders as $slider)
                    <li>
                        <img class="h-100 w-100" src="{{asset($slider->slider_image)}}" alt="viganella">
                    </li>
                        @endforeach

                </ul>
            </div>
        </div>
        <div class="uk-overlay uk-position-center">
            <div class="w-50 overlay-text m-auto">
                <div class="bg-half-black rounded rounded-3 text-center text-white p-2 mb-2">
                    <p class="fs-2 letter-space">{{$SectionOne->name}}</p>
                    <p class="fs-4 text-third">{{$SectionOne->title}}</p>
                    <p class="uk-text-left">{{$SectionOne->paragraph}}</p>
                    <p class="text-third">{{$SectionOne->offer_name}}</p>
                </div>
                <div class="bg-white w-50 m-auto rounded-3">
                    {{--!test--}}
                    <button onclick="window.location.href ='{{url("app/product/")}}/offers'" class="btn-logo w-100 rounded-2">
                        Check More
                    </button>
                    {{--!test--}}
                </div>
            </div>
        </div>
    </div>
</header>

<!----- End Main Section ----->


<!----- Start Vision Section ----->

<section id="vision" class="text-center uk-background-center-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="m-0 p-2 mx-md-5 px-md-5">
                    <p class="fs-1 text-black">Our Vision</p>
                    <p class="fs-4 text-shadow">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College
                        in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from
                        sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line
                        of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!----- End Vision Section ----->


<!----- Start Collection Section ----->


<section id="collection-sec" class="text-black bg-gray py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-1">
                <div class="mt-md-5 w-75 m-auto">
                    <p class="border-3 border-start border-main fs-1">New<br>Collection</p>
                    <p class="fs-3">Curtain, Pillows<br>and Fabrics</p>
                    <p class="fs-3"><span class="text-third">Special Offer</span><br><span class="ps-md-5 fs-2">15% Off</span></p>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-6">
                        <img class="p-md-2 pt-2" src="assets/img/collection-4.png" alt="">
                    </div>
                    <div class="col-6">
                        <img class="p-md-2 pt-2" src="assets/img/collection-3.png" alt="">
                    </div>
                    <div class="col-6">
                        <img class="p-md-2 pt-2" src="assets/img/collection-2.png" alt="">
                    </div>
                    <div class="col-6">
                        <img class="p-md-2 pt-2" src="assets/img/collection-1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!----- End Collection Section ----->


<!----- Start Category Section ----->

<section id="category" class="py-5">
    <div class="title">
        <div class=" uk-flex uk-flex-middle uk-flex-center">
            <div class="w-100 border-bottom border-main border-3"></div>
            <p class="text-black w-100 text-center mx-5 fs-1">Categories</p>
            <div class="w-100 border-bottom border-main border-3"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($categories as $C)
            <div class="col-md-2 col-4 rounded-circle p-2">
                <a href="{{route('app.categories', ['id' => $C->id])}}" style="color:white">
                <div class="uk-inline">
                    <img class="" src="{{asset($C->image)}}" alt="Pillows">
                    <div class="rounded-circle overlay-main uk-position-cover"></div>
                    <div class="rounded-circle uk-overlay uk-position-center p-0 ">
                        <p class="m-0">{{$C->name}}</p>
                    </div>
                </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!----- End Category Section ----->


<!----- Start Our Work Section ----->

<section id="our-work" class="text-black fs-2 bg-gray ">
    <div class="title">
        <div class=" uk-flex uk-flex-middle uk-flex-center">
            <div class="w-100 border-bottom border-main border-3"></div>
            <p class="text-black w-100 text-center mx-md-5 fs-1">How we work</p>
            <div class="w-100 border-bottom border-main border-3"></div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-2 mt-md-5">
            <div class="col-lg-5">
                <div class="text-center px-lg-4">
                    <!-- <p class="ps-4 fs-1 letter-space">Viganella</p> -->
                    <p class="ps-md2 fs-2 text-third">2022 Fabrics</p>
                    <p class="ps-md- fs-4">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>
                </div>
            </div>
            <div class="col-lg-7 mb-3">
                <video src="https://yootheme.com/site/images/media/yootheme-pro.mp4" controls loop playsinline uk-video="autoplay: inview"></video>
            </div>
        </div>
    </div>
</section>


<!----- End Our Work Section ----->



<!----- Start Carousel-1 Section ----->

<section id="carousel" class="py-5">
    <div class="title">
        <div class="uk-flex uk-flex-middle uk-flex-center">
            <div class="w-100 border-bottom border-main border-3"></div>
            <p class="text-black w-100 text-center mx-md-5 fs-1">New Arrivals</p>
            <div class="w-100 border-bottom border-main border-3"></div>
        </div>
    </div>
    <div class="container">
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                @foreach($newArrival as $K=>$NA)
                <input type="hidden" class="product_id" value="{{$NA->id}}">
                @if($K == 0)
                <li>
                    <a href="{{route('app.product', ['id' => $NA->id])}}">
                    <div class="uk-panel position-relative">
                        <img class="shadow rounded-3" src="{{asset($NA->main_image)}}" alt="">
                        <p class="text-black ps-3">
                            {{$NA->title}}<br>
                            <span class="text-main">{{$NA->discount ? $NA->price_after_discount : $NA->price}}</span>
                        </p>
                        <img class="position-absolute w-15 top-0 start-0" src="{{asset('site-assets/assets/img/badge.png')}}" alt="">
                    </div>
                    </a>

                </li>
                @else
                <li>
                    <a href="{{route('app.product', ['id' => $NA->id])}}">
                    <div class="uk-panel">
                        <img class="shadow rounded-3" src="{{asset($NA->main_image)}}" alt="">
                        <p class="text-black ps-3">
                            {{$NA->title}}<br>
                            <span class="text-main">{{$NA->discount ? $NA->price_after_discount : $NA->price}}</span>
                        </p>
                    </div>
                    </a>

                </li>
                @endif
                @endforeach

            </ul>

            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>

        </div>
    </div>
</section>

<!----- End Carousel-1 Section ----->


<!----- Start Carousel-2 Section ----->

<section id="carousel" class="py-5">
    <div class="title">
        <div class=" uk-flex uk-flex-middle uk-flex-center">
            <div class="w-100 border-bottom border-main border-3"></div>
            <p class="text-black w-100 text-center mx-md-5 fs-1">Special Products</p>
            <div class="w-100 border-bottom border-main border-3"></div>
        </div>
    </div>
    <div class="container">
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                @foreach($SpecialProducts as $K=>$SP)
                <input type="hidden" class="product_id" value="{{$SP->id}}">
                <li>
                    <a href="{{route('app.product', ['id' => $SP->id])}}">
                    <div class="uk-panel">
                        <img class="shadow rounded-3" src="{{asset($SP->main_image)}}" alt="">
                        <p class="text-black ps-3">
                            {{$SP->title}}<br>
                            <span class="text-main">{{$SP->discount ? $SP->price_after_discount : $SP->price}}</span>
                        </p>
                    </div>
                    </a>

                </li>
                @endforeach
            </ul>

            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>

        </div>
    </div>
</section>

<!----- End Carousel-2 Section ----->


<!----- Start Carousel-3 Section ----->

<section id="carousel" class="py-5">
    <div class="title">
        <div class=" uk-flex uk-flex-middle uk-flex-center">
            <div class="w-100 border-bottom border-main border-3"></div>
            <p class="text-black w-100 text-center mx-md-5 fs-1">Offers</p>
            <div class="w-100 border-bottom border-main border-3"></div>
        </div>
    </div>
    <div class="container">
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                @foreach($Offers as $K=>$OF)
                <input type="hidden" class="product_id" value="{{$OF->id}}">
                <li>
                    <a href="{{route('app.product', ['id' => $OF->id])}}">
                    <div class="uk-panel">
                        <img class="shadow rounded-3" src="{{asset($OF->main_image)}}" alt="">
                        <p class="text-black ps-3">
                            {{$OF->title}}<br>
                            <span class="text-main">{{$OF->discount ? $OF->price_after_discount : $OF->price}}</span>
                        </p>
                    </div>
                    </a>

                </li>
                @endforeach

            </ul>

            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>

        </div>
    </div>
</section>

<!----- End Carousel-1 Section ----->

@endsection
