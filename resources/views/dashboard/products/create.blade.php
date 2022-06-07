@extends('dashboard.layouts.master')
<style type="text/css">
    input[type=file] {
        display: inline;
    }

    #image_preview {
        border: 1px solid black;
        padding: 10px;
    }

    #image_preview img {
        width: 200px;
        padding: 5px;
    }

</style>
@section('title')
    @lang('sidebar.create_products')
@endsection
@section('active')
    create_products
@endsection
@section('card_title')
    @lang('sidebar.create_products')
@endsection

@section('content')

    <form action="{{ route('dashboard.products.store') }}" method="post" enctype="multipart/form-data">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert bg-danger alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
                    <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {{ $error }}
                </div>
            @endforeach
        @endif
        @csrf
        {{ method_field('post') }}
        <div class="form-body">
            <h4 class="form-section"><i class="la la-folder-open"></i> @lang('sidebar.create_products')</h4>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="title">أسم المنتج</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="title" class="form-control" name="title" placeholder=" المنتج"
                        value="{{ old('title') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="code">كود المنتج</label>
                <div class="col-md-9 mx-auto">
                    <input type="number" id="code" class="form-control" name="code" placeholder=" كود المنتج"
                        value="{{ old('code') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="dimensions">الأبعاد</label>
                <div class="col-md-9 mx-auto">
                    <input type="number" id="dimensions" class="form-control" name="dimensions" placeholder="الأبعاد"
                        value="{{ old('dimensions') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="color">اللون</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="color" class="form-control" name="color" placeholder="اللون"
                        value="{{ old('color') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="materials">الماتريال</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="materials" class="form-control" name="materials" placeholder="الماتريال"
                        value="{{ old('materials') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="description">وصف المنتج</label>
                <div class="col-md-9 mx-auto">
                    <textarea type="text" id="description" class="form-control" name="description"
                        placeholder="وصف المنتج">{{ old('description') }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="price">السعر</label>
                <div class="col-md-9 mx-auto">
                    <input type="number" id="price" class="form-control" name="price" placeholder=" السعر"
                        value="{{ old('price') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="images">صورة المنتج</label>
                <div class="col-md-9 mx-auto">

                    <input type="file" id="images" name="images[]" multiple />
                </div>


            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="product_type">نوع المنتج</label>
                <div class="col-md-9 mx-auto">
                    <select id="product_type" name="product_type" class="form-control">
                        <option value="">أختر نوع المنتج</option>
                        <option value="best_selling" {{ old('product_type') === 'best_selling' ? 'selected' : '' }}>الأفضل
                            مبيعا</option>
                        <option value="hot_offers" {{ old('product_type') === 'hot_offers' ? 'selected' : '' }}>عروض نارية
                        </option>
                        <option value="recommended" {{ old('product_type') === 'recommended' ? 'selected' : '' }}>منتجات
                            موصي به</option>
                        <option value="new" {{ old('product_type') === 'new' ? 'selected' : '' }}>منتجات جديدة</option>
                        <option value="default" {{ old('product_type') === 'default' ? 'selected' : '' }}>منتجات عادي
                        </option>
                        <option value="special" {{ old('product_type') === 'special' ? 'selected' : '' }}>منتجات خاصة
                        </option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="discount_type">نوع الخصم</label>
                <div class="col-md-9 mx-auto">
                    <select id="discount_type" name="discount_type" class="form-control">
                        <option value="">أختر نوع الخصم</option>
                        <option value="percentage" {{ old('discount_type') === 'percentage' ? 'selected' : '' }}>نسبة مئوية
                        </option>
                        <option value="fixed" {{ old('discount_type') === 'fixed' ? 'selected' : '' }}>رقم </option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="price"> الخصم</label>
                <div class="col-md-9 mx-auto">
                    <input type="number" id="discount" class="form-control" name="discount" placeholder=" الخصم"
                        value="{{ old('discount') }}">
                </div>
            </div>
            <div class="form-group row">
                <!--here-->
                <label class="col-md-3 label-control" for="price_after_discount"> السعر بعد الخصم</label>
                <div class="col-md-9 mx-auto">
                    <input type="number" id="price_after_discount" class="form-control" name="price_after_discount"
                        placeholder=" السعر بعد الخصم" readonly value="{{ old('price_after_discount') }}">
                    <!--here-->

                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="estimated_delivery">تاريخ الوصول</label>
                <div class="col-md-9 mx-auto">
                    <input type="date" id="estimated_delivery" class="form-control" name="estimated_delivery"
                        placeholder="تاريخ الوصول" value="{{ old('estimated_delivery') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="price">القسم</label>
                <div class="col-md-9 mx-auto">
                    <select id="category_id" name="category_id" class="form-control">
                        <option value="">أختر القسم</option>
                        @foreach ($categories as $C)
                            <option value="{{ $C->id }}">{{ $C->name }}</option>
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
                        <option value="1" {{ old('status') === 1 ? 'selected' : '' }}>@lang('global.active')</option>
                        <option value="0" {{ old('status') === 0 ? 'selected' : '' }}>@lang('global.deactivated')</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-actions row">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success">
                    <i class="la la-check-square-o"></i>
                    @lang('global.create')
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
