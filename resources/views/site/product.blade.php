
@extends('site.layouts.master')
@section('title')
Viganella
@endsection
  <!----- Start Main Section ----->

  @section('content')
<!--test-->
    <!-----  Start Product part  ----->
    @isset($id)
        <section id="product-descrip" class="py-5">
            <div class="container">
              <div class="row">
              @if(is_numeric($id) && $id > 0)

                  <div class="col-md-5">
                    <img class="" src="{{asset($product->main_image)}}" alt="product-name">
                </div>
                <div class="col-md-7 product_data" style="color:black">
                  <p class="fs-3">{{$product->title}}</p>
                  <p class="uk-text-bold">${{$product->price_after_discount ? $product->price_after_discount : $product->price}}</p>
                  <p class="uk-text-bold">Descreption:</p>
                  <p class="my-0">{{$product->description}}</p>
                  <p class="uk-text-bold">About This Item:</p>
                  <p class="my-0">Dimensions: {{$product->dimensions}}</p>
                  <p class="my-0">Color: {{$product->color}}</p>
                  <p class="my-0">Materials: {{$product->materials}}</p>
                  <p class="uk-text-bold">Estimated delivery:</p>
                  <p>{{$product->estimated_delivery}} - {{$product->end_estimated_delivery	}}</p>
                  <input type="hidden" class="qty-input" value="1">
                  <input type="hidden" class="product_id" value="{{$product->id}}">
                  <div class="d-flex align-items-center justify-content-center">
                    <button  class="btn-logo add-to-cart-btn">
                        Add to Cart +
                    </button>
                  </div>
                </div>
                <br>

                <div class="col-12">
                    <div class="container">
                      <div class="row text-white">
                          @foreach($categories as $C)
                          <div class="col-md-2 col-4 rounded-circle">
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
                </div>
                <div class="col-12">
                  <div class="container py-5">
                      <p class="text-black w-100 uk-text-bold">More product like this</p>
                      <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                          <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                              @isset($relatedProduct->products ) <!--test-->
                                  @foreach($relatedProduct->products as $RP)
                                  <li>
                                    <a href="{{route('app.product', ['id' => $RP->id])}}">
                                      <div class="uk-panel">
                                          <img class="shadow rounded-3" src="{{asset($RP->main_image)}}" alt="">
                                          <p class="text-black">
                                              {{$RP->title}}<br>
                                              <span class="text-main">${{$RP->price_after_discount ? $RP->price_after_discount : $RP->price}}</span>
                                          </p>
                                      </div>
                                    </a>
                                  </li>
                                  @endforeach
                              @endif<!-- end_test-->
                          </ul>

                          <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                          <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>

                      </div>
                  </div>
                </div>
              </div>

            @elseif($id == 'offers')

                    <div class="col-12">
                        <div class="container py-5">
                            <p class="text-black w-100 uk-text-bold">Our Offers</p>
                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

{{--                                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">--}}
{{--                                    @foreach($relatedProduct as $RP)--}}
{{--                                        <li>--}}
{{--                                            <a href="{{route('app.product', ['id' => $RP->id])}}">--}}
{{--                                                <div class="uk-panel">--}}
{{--                                                    <img class="shadow rounded-3" src="{{asset($RP->main_image)}}" alt="">--}}
{{--                                                    <p class="text-black">--}}
{{--                                                        {{$RP->title}}<br>--}}
{{--                                                        <span class="text-main">${{$RP->price_after_discount ? $RP->price_after_discount : $RP->price}}</span>--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}

                                <ul  class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                                    @foreach($relatedProduct as $RP)
                                        <li class="col-4">
                                            <a href="{{route('app.product', ['id' => $RP->id])}}">
                                                <div class="uk-panel">
                                                    <img class="shadow rounded-3" src="{{asset($RP->main_image)}}" alt="">
                                                    <p class="text-black">
                                                        {{$RP->title}}<br>
                                                        <span class="text-main">${{$RP->price_after_discount ? $RP->price_after_discount : $RP->price}}</span>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>

                                <div class="mt-5"> {{$relatedProduct->links()}}</div>


                                <a class="uk-position-center-left uk-position-small bg-danger" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>

                            </div>
                        </div>
                    </div>

                @endif

            </div>

          </section>

          <!-----  End Product part  ----->
    @endisset
<!--test-->
@endsection


