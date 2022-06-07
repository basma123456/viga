
@extends('site.layouts.master')
@section('title')
Viganella
@endsection
  <!----- Start Main Section ----->
  <style>
    .proc {
        text-align: center;
        text-decoration: none;
        color:black;

    }
    .proc:hover{
            color : white;
            text-decoration: none;
        }

</style>
  @section('content')


  <!-----  Start Cart Section   ----->


  <section id="cart-page" class="my-5">
    <div class="container">

      <div class="accordion" id="accordionCart">
        <div class="border-0">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        1 - Choose a Shipping Address :
      </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionCart">
            <div class="bg-gray rounded-3">
              <div class="container">
                <div class="row px-5">
                  <div class="col-12 pb-5 pt-2">
                    <h4>Your Addresses</h4>
                    <div class="w-100 px-5 py-2">
                      <div class="px-5 border-bottom border-main border-3"></div>
                    </div>
                    <p>
                      <ul>
                        <li onclick="gg(this,0)"  class="bg-dark px-3 py-2 rounded-3">
                          <span class="myAddress"   class="text-white">
                          {{auth()->user()->street_name}} , {{auth()->user()->building_name}}
                          {{auth()->user()->landmark}}, {{auth()->user()->city}}, {{auth()->user()->country}}, Phone number: {{auth()->user()->phone_number}}
                        </span>
                        </li>
                      </ul>
                        @if(isset($ShippingAddress))
                        @foreach($ShippingAddress as $shipping)
                        <ul>
                        <li onclick="gg(this,{{$shipping->id}})" class="bg-dark px-3 py-2 rounded-3">
                        <span id="second_address"  class="text-white">
                            {{$shipping->street_name}} , {{$shipping->building_name}}
                            {{$shipping->landmark}}, {{$shipping->city}}, {{$shipping->country}}, Phone number: {{$shipping->phone_number}}
                          </span>
                        </li>
                        </ul>
                        @endforeach
                        @endif

                    </p>

                    <!-- Start Add Address Model-->

                    <a href="#address-model" data-bs-toggle="modal" class="pb-4 d-block text-decoration-none"> + Add new address</a>
                    <div class="modal fade" id="address-model" aria-hidden="true" aria-labelledby="signinModelLabel" tabindex="-1">
                      <div class="modal-dialog modal-lg">
                        <button type="button" class="btn-close ms-auto me-3 mt-3 opacity-25" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="uk-modal-header bg-gray rounded-top">
                          <h2 class="uk-modal-title">Enter a new shipping address</h2>
                        </div>
                        <div class="modal-content rounded-0 rounded-bottom border-0 border-top border-main border-4">
                          <div class="modal-body bg-gray text-center">
                            <div class="contanier">

                              <form  class="forms">
                                <div class="mt-4">
                                  <input class="uk-input uk-width-2-3 border-dark rounded-3 ps-3 d-inline-block full_name"  type="text" placeholder="Full Name" required>
                                </div>
                                <div class="mt-4">
                                  <input class="uk-input uk-width-2-3 border-dark rounded-3 ps-3 d-inline-block country" type="text" placeholder="Country" required>
                                </div>
                                <div class="mt-4">
                                  <input class="uk-input uk-width-2-3 border-dark rounded-3 ps-3 d-inline-block phone_number" type="number" placeholder="Mobile Number: +20##########" required>
                                </div>
                                <div class="mt-4">
                                  <input class="uk-input uk-width-2-3 border-dark rounded-3 ps-3 d-inline-block street_name" type="text" placeholder="Street Name: Talaat Harb" required>
                                </div>
                                <div class="mt-4">
                                  <input class="uk-input uk-width-2-3 border-dark rounded-3 ps-3 d-inline-block building_name" type="text" placeholder="Building Name/no, floor, apt." required>
                                </div>
                                <div class="mt-4">
                                  <input class="uk-input uk-width-2-3 border-dark rounded-3 ps-3 d-inline-block city" type="text" placeholder="City/Area" required>
                                </div>
                                <div class="mt-4">
                                  <input class="uk-input uk-width-2-3 border-dark rounded-3 ps-3 d-inline-block landmark" type="text" placeholder="Nearest Landmark" required>
                                </div>
                                <div class="mt-4">
                                  <p class="uk-text-left ps-5"> <span class="ps-5 ms-5"> Optional</span></p>
                                  <input class="uk-input uk-width-2-3 border-dark rounded-3 ps-3 d-inline-block delivery_instructions" type="text" placeholder="Add Delivery Instructions">
                                </div>
                                <div class="d-flex align-items-center justify-content-center pt-4">
                                  <button class="btn-logo subm">
                                  Add Address
                                </button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- End Add Address Model-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border-0">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              2- Items and Shipping
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse mb-2" aria-labelledby="headingTwo" data-bs-parent="#accordionCart">
            <div class="bg-gray rounded-3">
              <div class="container">
                <div class="row px-5">
                  <div class="col-12">
                    <p class="mt-2" style="color:black">Review Items and Shipping</p>
                    <div class="w-75 m-auto border-bottom border-main border-3"></div>
                    <div class="row">
                        @if(Cookie::get('shopping_cart'))
                        @foreach ($cart_data as $data)
                      <div class="col-md-3">
                        <img class="shadow rounded-3" src="{{asset( $data['item_image'])}}" alt="">
                        <p class="text-black ps-3">
                            {{ $data['item_name'] }}<br>
                          <span class="text-main">${{ $data['item_price'] }}</span>
                        </p>
                      </div>
                      @endforeach
                      @endif

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex flex-column justify-content-center align-items-center fs-3">
        <a class="btn-logo fs-4 uk-text-bold proc" type="button" href="{{route('app.submitOrder')}}">
          Procced to Buy
        </a>
      </div>
    </div>
  </section>


  <!-----  End Cart Section   ----->

<script>

  function gg( object , object2){
      let m = document.getElementById('second_address').innerText;
      alert('You Have Changed Your Address');
      window.location.href ='{{url("app/cartAddress")}}?new='+object2;


  }
</script>
@endsection









