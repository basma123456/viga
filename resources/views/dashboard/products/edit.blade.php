@extends('dashboard.layouts.master')

@section('title')
    تعديل سعر
@endsection
@section('active')
    create_price
@endsection
@section('card_title')
    تعديل سعر
@endsection

@section('content')

    <form action="{{route("dashboard.products.update", $product->id)}}" method="post" enctype="multipart/form-data">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert bg-danger alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
                    <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {{$error}}
                </div>
            @endforeach
        @endif
        @csrf
        {{method_field('put')}}
        <div class="form-body">
            <h4 class="form-section"><i class="la la-folder-open"></i> @lang('sidebar.create_products')</h4>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="title">أسم المنتج</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="title" class="form-control" name="title" placeholder=" المنتج"
                        value="{{ $product->title }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="code">كود المنتج</label>
                <div class="col-md-9 mx-auto">
                    <input type="number" id="code" class="form-control" name="code" placeholder=" كود المنتج"
                        value="{{ $product->code }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="dimensions">الأبعاد</label>
                <div class="col-md-9 mx-auto">
                    <input type="number" id="dimensions" class="form-control" name="dimensions" placeholder="الأبعاد"
                        value="{{ $product->dimensions }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="color">اللون</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="color" class="form-control" name="color" placeholder="اللون"
                        value="{{ $product->color }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="materials">الماتريال</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="materials" class="form-control" name="materials" placeholder="الماتريال"
                        value="{{ $product->materials }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="description">وصف المنتج</label>
                <div class="col-md-9 mx-auto">
                    <textarea type="text" id="description" class="form-control" name="description"
                        placeholder="وصف المنتج">{{ $product->description }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="price">السعر</label>
                <div class="col-md-9 mx-auto">
                    <input type="number" id="price" class="form-control" name="price" placeholder=" السعر"
                        value="{{ $product->price }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="images">صورة المنتج</label>
                <div class="col-md-9 mx-auto">

                    <input type="file" id="images" name="images" />
                </div>


            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="product_type">نوع المنتج</label>
                <div class="col-md-9 mx-auto">
                    <select id="product_type" name="product_type" class="form-control">
                        <option value="">أختر نوع المنتج</option>
                        <option value="best_selling" {{ $product->product_type === 'best_selling' ? 'selected' : '' }}>الأفضل
                            مبيعا</option>
                        <option value="hot_offers" {{ $product->product_type === 'hot_offers' ? 'selected' : '' }}>عروض نارية
                        </option>
                        <option value="recommended" {{ $product->product_type === 'recommended' ? 'selected' : '' }}>منتجات
                            موصي به</option>
                        <option value="new" {{ $product->product_type === 'new' ? 'selected' : '' }}>منتجات جديدة</option>
                        <option value="default" {{ $product->product_type === 'default' ? 'selected' : '' }}>منتجات عادي
                        </option>
                        <option value="special" {{ $product->product_type === 'special' ? 'selected' : '' }}>منتجات خاصة
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="discount_type">نوع الخصم</label>
                <div class="col-md-9 mx-auto">
                    <select id="discount_type" name="discount_type" class="form-control">
                        <option value="">أختر نوع الخصم</option>
                        <option value="percentage" {{ $product->discount_type === 'percentage' ? 'selected' : '' }}>نسبة مئوية
                        </option>
                        <option value="fixed" {{ $product->discount_type === 'fixed' ? 'selected' : '' }}>رقم </option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="price"> الخصم</label>
                <div class="col-md-9 mx-auto">
                    <input type="number" id="discount" class="form-control" name="discount" placeholder=" الخصم"
                        value="{{ $product->discount }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="price_after_discount"> السعر بعد الخصم</label>
                <div class="col-md-9 mx-auto">
                    <input type="number" id="price_after_discount" class="form-control" name="price_after_discount"
                        placeholder=" السعر بعد الخصم" readonly value="{{ $product->price_after_discount }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="estimated_delivery">تاريخ الوصول</label>
                <div class="col-md-9 mx-auto">
                    <input type="date" id="estimated_delivery" class="form-control" name="estimated_delivery"
                        placeholder="تاريخ الوصول" value="{{ $product->estimated_delivery }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="price">القسم</label>
                <div class="col-md-9 mx-auto">
                    <select id="category_id" name="category_id" class="form-control">
                        <option value="">أختر القسم</option>
                        @foreach ($categories as $C)
                            <option value="{{ $C->id }}" {{$product->category_id == $C->id ? 'selected': '' }}>{{ $C->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="subcategory">القسم الفرعي</label>
                <div class="col-md-9 mx-auto">
                    <select class="browser-default custom-select" name="subcategory" id="subcategory">
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="status">@lang('global.status')</label>
                <div class="col-md-9 mx-auto">
                    <select id="status" name="status" class="form-control">
                        <option value="1" {{ $product->status === 1 ? 'selected' : '' }}>@lang('global.active')</option>
                        <option value="0" {{ $product->status === 0 ? 'selected' : '' }}>@lang('global.deactivated')</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-actions row">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success">
                    <i class="la la-check-square-o"></i>
                    @lang('global.update')
                </button>
            </div>
        </div>
    </form>
@endsection


@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function() {
                var stateID = $(this).val();
                if (stateID) {
                    $.ajax({
                        url: '/dashboard/subcat/' + stateID,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {


                            $('select[name="subcategory"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="subcategory"]').append(
                                    '<option value="' + key + '">' + value +
                                    '</option>');
                            });


                        }
                    });
                } else {
                    $('select[name="subcategory"]').empty();
                }
            });
        });
    </script>
    <!-- <script type="text/javascript">

        $(document).ready(function() {

            $('select[name="discount_type"]').on('change', function() {
                var val = $(this).val();
                if(val === "percentage") {
                $('input[name = discount]').on('keyup', function() {
                var userInput = $(this).val();
                var price = $('input[name = price]').val();
                console.log(price);
                });

            }
        });
    });
</script> -->

    <script type="text/javascript">
        //test
        $(function() {

            $('select[name="discount_type"]').on('change', function() {
                updateTotal();
            });
            $('input[name = discount]').keyup(function() {
                updateTotal();
            });

            $('input[name = price]').keyup(function() {
                updateTotal();
            });

            var updateTotal = function () {
                var discount_type = $('#discount_type').val();
                if(discount_type === "percentage") {
                    var input1 = parseInt($('#price').val());
                    var input2 = parseInt($('#discount').val());
                    var price_after_discount = (input1 * input2) / 100 ;
                    parseInt($('#price_after_discount').val(input1 - price_after_discount));
                }

                if(discount_type === "fixed") {
                    var input1 = parseInt($('#price').val());
                    var input2 = parseInt($('#discount').val());
                    var price_after_discount = (input1 - input2) ;
                    parseInt($('#price_after_discount').val(price_after_discount))
                }
            };
        });


        {{--<input type="number" id="price_after_discount" class="form-control" name="price_after_discount"--}}
        {{--placeholder=" السعر بعد الخصم" readonly value="{{ old('price_after_discount') }}">--}}
//test
    </script>

@endsection
