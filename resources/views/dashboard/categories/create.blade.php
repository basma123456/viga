@extends('dashboard.layouts.master')

@section('title')
    @lang('sidebar.create_category')
@endsection
@section('active')
    create_category
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/css-rtl/plugins/forms/checkboxes-radios.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/vendors/css/forms/icheck/custom.css')}}">
@endsection
@section('card_title')
    @lang('sidebar.create_category')
@endsection

@section('content')
    <form class="form form-horizontal" action="{{route('dashboard.categories.store')}}" method="post" enctype="multipart/form-data">
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
        {{method_field('post')}}
        <div class="form-body">
            <h4 class="form-section"><i class="la la-folder-open"></i> @lang('global.name')</h4>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="name">@lang('category.name')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="name" class="form-control" placeholder="@lang('category.name')" name="name" value="{{old('name')}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="name">@lang('category.image')</label>
                <div class="col-md-9 mx-auto">
                    <input type="file" id="image" name="image"/>
                </div>
            </div>
            <h4 class="form-section"><i class="la la-industry" style="font-size: 20px"></i> @lang('global.seo_tools')</h4>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="slug">@lang('global.slug')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="slug" class="form-control" placeholder="@lang('global.slug')" name="slug" value="{{old('slug')}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="seo">@lang('category.seo_title')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="seo" class="form-control" placeholder="@lang('category.seo_title')" name="seo" value="{{old('seo')}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="meta_desc">@lang('category.meta_description')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="meta_desc" class="form-control" placeholder="@lang('category.meta_description')" name="meta_desc" value="{{old('meta_desc')}}">
                </div>
            </div>

        </div>
        <h4 class="form-section"><i class="la la-cog" style="font-size: 20px"></i> @lang('global.setting')</h4>
        <div class="form-group row">
            <label class="col-md-3 label-control" for="code_category">@lang('category.code_category')</label>
            <div class="col-md-9 mx-auto">
                <input type="number" min="1" id="code_category" class="form-control" placeholder="@lang('category.code_category')" name="code_category" value="{{old('code_category')}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 label-control" for="priority">@lang('category.priority')</label>
            <div class="col-md-9 mx-auto">
                <input type="number" min="0" id="priority" class="form-control" placeholder="@lang('category.priority')" name="priority" value="{{old('priority')}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 label-control" for="has_child">@lang('category.has_sub_category')</label>
            <div class="col-md-9 mx-auto">
                <select id="has_child" name="has_child" class="form-control">
                    <option disabled selected>@lang('global.choose')</option>
                    <option value="1"  {{old('has_child') == 1 ? 'selected' :''}}>@lang('category.has_sub_category')</option>
                    <option value="0" {{old('has_child') == 0 ? 'selected' :''}}>@lang('category.no_have_subCategory')</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 label-control" for="status">@lang('global.status')</label>
            <div class="col-md-9 mx-auto">
                <select id="status" name="status" class="form-control">
                    <option value="1"  {{old('status') == 1 ? 'selected' :''}}>@lang('global.active')</option>
                    <option value="0" {{old('status') == 0 ? 'selected' :''}}>@lang('global.deactivated')</option>
                </select>
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

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->
@endsection
