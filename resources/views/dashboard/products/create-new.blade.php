@extends('dashboard.layouts.master')

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

    <form action="{{ route('dashboard.prices.store') }}" id="frm" method="post" class="needs-validation" novalidate="">
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
                    <input type="text" id="code" class="form-control" name="code" placeholder=" كود المنتج"
                        value="{{ old('code') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="dimensions">الأبعاد</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="dimensions" class="form-control" name="dimensions" placeholder="الأبعاد"
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
                    <input type="text" id="price" class="form-control" name="price" placeholder=" السعر"
                        value="{{ old('price') }}">
                </div>
            </div>
            <div class="form-group row">

                <label class="col-md-3 label-control" for="price">صورة المنتج</label>
                <div class="col-md-9 mx-auto">
                    <input id="files" type="file" name="files[]" data-button="" multiple="" accept="image/jpeg, image/png, image/gif," style="display:none;">

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
                    <input type="text" id="discount" class="form-control" name="discount" placeholder=" الخصم"
                        value="{{ old('discount') }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="price_after_discount"> السعر بعد الخصم</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="price_after_discount" class="form-control" name="price_after_discount"
                        placeholder=" السعر بعد الخصم" readonly value="{{ old('price_after_discount') }}">
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
     <!--Image container -->
     <div class="row"
     data-type="imagesloader"
     data-errorformat="Accepted file formats"
     data-errorsize="Maximum size accepted"
     data-errorduplicate="File already loaded"
     data-errormaxfiles="Maximum number of images you can upload"
     data-errorminfiles="Minimum number of images to upload"
     data-modifyimagetext="Modify immage">

  <!-- Progress bar -->
  <div class="col-12 order-1 mt-2">
    <div data-type="progress" class="progress" style="height: 25px; display:none;">
      <div data-type="progressBar" class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%;">Load in progress...</div>
    </div>
  </div>

  <!-- Model -->
  <div data-type="image-model" class="col-4 pl-2 pr-2 pt-2" style="max-width:200px; display:none;">

    <div class="ratio-box text-center" data-type="image-ratio-box">
      <img data-type="noimage" class="btn btn-light ratio-img img-fluid p-2 image border dashed rounded" src="./img/photo-camera-gray.svg" style="cursor:pointer;">
      <div data-type="loading" class="img-loading" style="color:#218838; display:none;">
        <span class="fa fa-2x fa-spin fa-spinner"></span>
      </div>
      <img data-type="preview" class="btn btn-light ratio-img img-fluid p-2 image border dashed rounded" src="" style="display: none; cursor: default;">
      <span class="badge badge-pill badge-success p-2 w-50 main-tag" style="display:none;">Main</span>
    </div>

    <!-- Buttons -->
    <div data-type="image-buttons" class="row justify-content-center mt-2">
      <button data-type="add" class="btn btn-outline-success" type="button"><span class="fa fa-camera mr-2"></span>Add</button>
      <button data-type="btn-modify" type="button" class="btn btn-outline-success m-0" data-toggle="popover" data-placement="right" style="display:none;">
        <span class="fa fa-pencil-alt mr-2"></span>Modify
      </button>
    </div>
  </div>

  <!-- Popover operations -->
  <div data-type="popover-model" style="display:none">
    <div data-type="popover" class="ml-3 mr-3" style="min-width:150px;">
      <div class="row">
        <div class="col p-0">
          <button data-operation="main" class="btn btn-block btn-success btn-sm rounded-pill" type="button"><span class="fa fa-angle-double-up mr-2"></span>Main</button>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-6 p-0 pr-1">
          <button data-operation="left" class="btn btn-block btn-outline-success btn-sm rounded-pill" type="button"><span class="fa fa-angle-left mr-2"></span>Left</button>
        </div>
        <div class="col-6 p-0 pl-1">
          <button data-operation="right" class="btn btn-block btn-outline-success btn-sm rounded-pill" type="button">Right<span class="fa fa-angle-right ml-2"></span></button>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-6 p-0 pr-1">
          <button data-operation="rotateanticlockwise" class="btn btn-block btn-outline-success btn-sm rounded-pill" type="button"><span class="fas fa-undo-alt mr-2"></span>Rotate</button>
        </div>
        <div class="col-6 p-0 pl-1">
          <button data-operation="rotateclockwise" class="btn btn-block btn-outline-success btn-sm rounded-pill" type="button">Rotate<span class="fas fa-redo-alt ml-2"></span></button>
        </div>
      </div>
      <div class="row mt-2">
        <button data-operation="remove" class="btn btn-outline-danger btn-sm btn-block" type="button"><span class="fa fa-times mr-2"></span>Remove</button>
      </div>
    </div>
  </div>

</div>
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
    <script type="text/javascript">
        // Ready
        $(document).ready(function() {

            //Image loader var to use when you need a function from object
            var auctionImages = null;

            // Create image loader plugin
            var imagesloader = $('[data-type=imagesloader]').imagesloader({
                maxFiles: 4,
                minSelect: 1,
                imagesToLoad: auctionImages
            });

            //Form
            $frm = $('#frm');

            // Form submit
            $frm.submit(function(e) {

                var $form = $(this);

                var files = imagesloader.data('format.imagesloader').AttachmentArray;

                var il = imagesloader.data('format.imagesloader');

                if (il.CheckValidity())
                    alert('Upload ' + files.length + ' files');

                e.preventDefault();
                e.stopPropagation();
            });

        });
    </script>
@endsection
