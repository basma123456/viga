
@extends('site.layouts.master')
@section('title')
Viganella
@endsection
  <!----- Start Main Section ----->

  @section('content')

       <!-----  Start Product part  ----->

       <section id="product-category" class="my-5 py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-----  Start Filter part  ----->

                    <div id="filter" class="shadow p-3 text-black fs-4">
                        <p>Design Yourself</p>
                        <div class="w-100 border-bottom border-main border-3"></div>
                        @foreach ($categories as $C)

                        <a class="{{$category->id == $C->id ? 'f-active' : ''}}" href="#">{{$C->name}}</a>
                        @foreach ($C->subcategories as $SUB)
                        <a class="fs-6" href="#" uk-filter-control=".{{$SUB->name}}">{{$SUB->name}}</a>
                       @endforeach
                        @endforeach
                        <div class="w-100 border-bottom border-main border-3"></div>
                        <p>Filters :</p>
                        <a class="d-inline" href="#">Special</a>
                        <a class="d-inline" href="#">Offers</a>
                        <a class="d-inline" href="#">Trending</a>
                        <div class="w-100 border-bottom border-main border-3"></div>
                        <p>Show by:</p>
                        <div class="">
                            <label><input class="uk-radio" type="radio" name="radio2" checked> Price: from Low to High</label>
                            <label><input class="uk-radio" type="radio" name="radio2"> Price: from High to Low</label>
                            <label><input class="uk-radio" type="radio" name="radio2"> Most Popular</label>
                            <label><input class="uk-radio" type="radio" name="radio2"> Highest Rating</label>
                        </div>
                        <button class="btn rounded-3 bg-main text-white uk-flex-center uk-align-center">Confirm</button>

                    </div>

                    <!-----  End Filter part  ----->

                </div>

                <!-----  Start product part  ----->

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-12">
                            <div uk-filter="target: #product-main-filter">

                                <ul class="uk-subnav uk-subnav-pill uk-child-width-1-4" uk-grid>
                                    <li class="uk-active" uk-filter-control=".all"><a class="justify-content-center fs-2" href="#">All</a></li>
                                    @foreach($category->subcategories as $SUB)
                                    <li uk-filter-control=".{{$SUB->name}}"><a class="justify-content-center fs-2" href="#">{{$SUB->name}}</a></li>
                                    @endforeach
                                </ul>

                                <div class="w-100 border-bottom border-main border-3 mb-5"></div>

                                <ul id="product-main-filter" class="uk-child-width-1-2 uk-child-width-1-3@m" uk-grid>
                                    @foreach($category->subcategories as $PSUB)
                                    @foreach($PSUB->products as $product)
                                    <li class="{{$PSUB->name}} all">

                                        <div class="">
                                            <img src="{{asset($product->main_image)}}" alt="">
                                            <p class="text-black ps-2 mt-0">
                                                {{$product->title}}<br>
                                                <span class="text-danger text-decoration-line-through">{{$product->price}}</span>
                                                <span class="text-main">{{$product->price_after_discount}}</span>
                                            </p>
                                        </div>

                                    </li>
                                    @endforeach
                                    @endforeach

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

                <!-----  End product part  ----->

            </div>
        </div>
    </section>

    <!-----  End Product part  ----->

@endsection
