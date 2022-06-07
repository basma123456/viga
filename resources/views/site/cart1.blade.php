
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

  <!-----  Start Cart Section   ----->


  <section id="cart-page" class="my-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="uk-text-bold fs-4">
            <i class="fa-solid fa-arrow-left fs-2 pe-5 text-second"></i> Your Shopping Cart
          </p>
          @if(isset($cart_data))
          <div class="col-md-12 text-right mb-3">
            <a href="javascript:void(0)" class="clear_cart font-weight-bold">Clear Cart</a>
        </div>

          @if(Cookie::get('shopping_cart'))
              @php $total="0" @endphp

              @foreach ($cart_data as $data)

          <!-- Start Cart Component-->

          <div class="row bg-gray rounded-3 qnt cartpage" style="color: black">
            <div class="col-2 p-0">
              <img class="w-100 h-100 rounded-3" src="{{asset( $data['item_image'])}}" alt="Your Product">
            </div>
            <div class="col-5 d-flex justify-content-center flex-column ps-4">
              <p class="uk-text-bold fs-3">{{ $data['item_name'] }}</p>
              <p class="fs-6">ID:{{ $data['item_id'] }}</p>
            </div>
            <div class="col-1 d-flex flex-column justify-content-center align-items-center uk-text-bold quantity">
              <button class="d-block btn fs-3 text-main incer-btn increment-btn changeQuantity"><i class="fa-solid fa-circle-plus w-100"></i></button>
              <input class="bg-transparent border-0 text-black uk-text-center fs-4 qty-input" disabled type="text" value="{{ $data['item_quantity'] }}" min="1" max="99">
              <button class="d-block btn fs-3 text-black decer-btn decrement-btn changeQuantity"><i class="fa-solid fa-circle-minus"></i></button>
            </div>
            <input type="hidden" class="pri" value="{{$data['item_price']}}">
            <input type="hidden" class="product_id" value="{{$data['item_id']}}">

            <input class="col-2 fs-3 bg-transparent border-0 text-black uk-text-center uk-text-bold item-totalprice" min="1" value="{{ number_format($data['item_quantity'] * $data['item_price'], 2) }}" disabled>
            </input>
            <div class="col-2 fs-2 d-flex flex-column justify-content-center align-items-center">
              <a class="text-black delete_cart_data" href="#"><i class="fa-solid fa-trash-can"></i></a>
            </div>
          </div>
          @php $total = $total + ($data["item_quantity"] * $data["item_price"]) @endphp

          <div class="container py-3 px-5">
            <div class="w-100 border-bottom border-main border-3"></div>
          </div>

          <!-- End Cart Component-->

          @endforeach

          @endif





          <!-- Start Cart Footer Section-->

          <div class="d-flex flex-column justify-content-center align-items-center fs-3" style="color:black">
            <p>Subtotal: <span class="uk-text-bold">{{isset($cart_data) ? count($cart_data) : 0 }}</span></p>
            <p>Total: <span class="uk-text-bold" id="tot">{{ isset($total) ? number_format($total, 2) : 0  }}</span></p>
          </div>
          <div class="d-flex align-items-center justify-content-center">
            <button class="btn-logo fs-4 uk-text-bold" type="button" uk-toggle="target: #modal-center">
              Procced to Buy
            </button>
            <div id="modal-center" class="uk-flex-top uk-modal-container" uk-modal style="color: black">
              <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                <div action="form-check">
                  <div class="d-flex justify-content-around align-items-center ps-4 pe-50">
                    <label for="addons-btn-1">
                      <p class="fs-4 uk-text-bold pe-5">Add something to the fabrics and curtains</p>
                      <p class="max-h-25 pe-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </label>
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                    <progress id="addons-bar" class="uk-progress w-75 m-0 d-inline-block" value="0" max="100"></progress>
{{--                    @if (Auth::user())--}}
                      @if (auth()->id() > 0)


                      <a href="{{route('app.cartAddress')}}" type="button" class="btn-logo mt-0 w-25 px-0 d-inline fs-4 uk-text-bold conf">
                      Confirm
                    </a>

                    @else
                    <a data-bs-toggle="modal" href="#signin-model" class="btn btn-success btn-block checkout-btn">PROCCED TO CHECKOUT</a>
                    {{-- you add a pop modal for making a login --}}
                      @endif
                  </div>
                  <div class="d-flex justify-content-around align-items-center ps-4 pe-50">
                    <label for="addons-btn-2">
                      <p class="fs-4 uk-text-bold pe-5">Add something to the fabrics and curtains</p>
                      <p class="max-h-25 pe-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </label>
                    <input id="addons-btn-2" class="addons-btn" type="radio">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- End Cart Footer Section-->
        </div>
        @else
        <div class="row">
            <div class="col-md-12 mycard py-5 text-center">
                <div class="mycards">
                    <h4>Your cart is currently empty.</h4>
                    <a href="{{ url('app/home') }}" class="btn btn-upper btn-primary outer-left-xs mt-5">Continue Shopping</a>
                </div>
            </div>
        </div>
    @endif
      </div>
    </div>
  </section>


  <!-----  End Cart Section   ----->


@endsection









