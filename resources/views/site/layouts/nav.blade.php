    <!-----  Start Nav Bar   ----->

    <nav id="navigator" class="navbar pb-2 text-white bg-main">
        <div class="container m-auto">
            <div class="row">
                <div class="col-md-1 col-3 order-3 order-md-0">
                    <a class="navbar-brand text-decoration-none" href="{{ route('app.home') }}">

                        {{--//test not show photo--}}
                        <img class="uk-preserve w-100 h-100"
                            src="{{ asset('site-assets/assets/img/logo-shadow.png') }}" alt="viganella" uk-svg>
                    </a>
                </div>
                <div class="col-md-4 col-7 text-center order-1 order-md-0">
                    <div class="row mt-2">
                        <div class="col-3 col-md-4 col-lg-6">
                            <span class="nav-item">
                                <a class="nav-link text-decoration-none p-1 active" aria-current="page"
                                    href="{{ route('app.home') }}">Home</a>
                            </span>
                        </div>
                        <div class="col">
                            <span class="nav-item">
                                <a class="nav-link text-decoration-none p-1"
                                    href="{{ route('app.settings') }}">Contact
                                    Us</a>
                                <!-- <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pages
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="pages/category.html">Category</a></li>
                                        <li><a class="dropdown-item" href="pages/about.html">About</a></li>
                                        <li><a class="dropdown-item" href="pages/product.html">Product</a></li>
                                        <li><a class="dropdown-item" href="pages/components.html">Components</a></li>
                                        <li><a class="dropdown-item" href="pages/cart-1.html">Cart</a></li>
                                        <li><a class="dropdown-item" href="pages/cart-2.html">Cart-2</a></li>
                                        <li><a class="dropdown-item" href="pages/cart-3.html">Cart-3</a></li>
                                        <li><a class="dropdown-item" href="pages/cart-4.html">Cart-4</a></li>
                                        <li><a class="dropdown-item" href="pages/profile-1.html">Profile-1</a></li>
                                        <li><a class="dropdown-item" href="pages/profile-2.html">Profile-2</a></li>
                                        <li><a class="dropdown-item" href="pages/track-1.html">Track-1</a></li>
                                        <li><a class="dropdown-item" href="pages/track-2.html">Track-2</a></li>
                                    </ul>
                                </div> -->
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 order-4 order-md-0 mt-2 mt-md-0">
                    <form class="d-flex justify-content-center mt-2">
                        <div class="uk-inline">
                            <a class="uk-form-icon text-decoration-none" href="#">
                                <i class="fa-solid fa-magnifying-glass mb-2"></i>
                            </a>
{{--                            <input--}}
{{--                                class="form-control uk-form-blank py-0 border-0 border-3 rounded-0 border-bottom ps-5"--}}
{{--                                type="search" name="search" placeholder="Search" aria-label="Search">--}}




                            {{--          test              ///////////////////search box///////////////////////--}}

{{--                            <input type="hidden" value="{{$place}}" name="place_id" />--}}


                                <input type="text" name="search" id="search" class="form-control form-control uk-form-blank py-0 border-0 border-3 rounded-0 border-bottom ps-5"  value="{{old('search')}}" placeholder="Search Here" />
                            <div id="search_list">

                            </div>
                            {{--          test              ///////////////////search box///////////////////////--}}
                        </div>
                    </form>
                </div>
                <br><br>
                <div class="col-md-1 col-3 order-5 order-md-0 mt-3 mt-md-0">
                    <button type="button" class="btn position-relative" >
                        <a href="{{ route('app.cart') }}">
                        <i class="fa-solid fa-cart-arrow-down fs-4"></i>
                        <span class="position-absolute top-100 start-50 translate-middle badge">Cart</span>
                        <span class="basket">
                            <span class="position-absolute top-0 start-50 translate-middle text-danger badge badge-pill red">0</span>
                        </span>
                        </a>
                    </button>

                </div>


                @if (auth()->check())
                    <div class="col-md-1 col-3 order-2 order-md-0">
                        <button type="button" class="btn position-relative">
                            <a href="{{route('app.profile')}}">
                            <i class="fa-solid fa-circle-user fs-4"></i>
                            <span class="position-absolute top-100 start-50 translate-middle badge">Account</span>
                            </a>
                        </button>
                    </div>
                @endif
                @if (auth()->check())
                    <div class="col-md-1 col-2 text-center">
                        <button type="button" class="btn position-relative" uk-toggle="target: #offcanvas-flip"
                            aria-expanded="true">
                            <i class="fa-solid fa-align-justify fs-2"></i>
                        </button>
                    </div>

                @else
                    <div class="col-md-1 col-2 text-center">
                        <button type="button" class="btn position-relative" uk-toggle="target: #offcanvas-flip-2">
                            <i class="fa-solid fa-align-justify fs-2"></i>
                        </button>
                    </div>
                @endif


            </div>
        </div>
    </nav>
    <!-----  End Nav Bar   ----->

    @include('site.layouts.partials.modal')


  @if(auth()->check())
    <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar bg-gray">

            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <div class="text-center">
                <i class="fa-solid fa-user-large text-third p-2 border border-3 border-main rounded-pill"></i>
                <p class="m-0 fs-6 ">Welcome Back {{ auth()->user()->full_name }}</p>
            </div>
            <div class="uk-offcanvas-body mt-3">
                <div class="w-100 border-bottom border-second border-1"></div>
                <a href="{{ route('app.settings') }}">Legal & About</a>
                <div class="w-100 border-bottom border-second border-1 my-2"></div>
                <a class="d-inline" href="https://wa.me/{{ $settings->phone }}">Customer Service <i
                        class="fa-solid fa-location-arrow text-main ms-3"></i></a>
                <div class="w-100 border-bottom border-second border-1 my-2"></div>
                <a href="{{ route('app.cart') }}">Your Orders</a>
                <a href="{{route('app.profile')}}">Your Account</a>
                <a class="text-danger" href="#">Sign Out</a>
            </div>
        </div>
    </div>
    @endif
    <script>
        //test

        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
        $(document).ready(function(){
            $('#search').on('keyup' , function(){
                $('#x_dismiss').addClass('show');

                var query = $(this).val();

                $.ajax({
                    url:"{{route('search.all.site')}}",
                    type:"GET",
                    data:{'search':query},
                    success:function(data){
                        $('#search_list').html(data);
                    }
                });
            });

            /////////////////////


            ///////////////////////////

            $('#x_dismiss').on('click' ,function(){
                $('#table-live-search').fadeOut();
                $('#x_dismiss').removeClass('show');

            });
        });

        //test
    </script>
