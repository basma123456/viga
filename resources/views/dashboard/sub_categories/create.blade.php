@extends('dashboard.layouts.master')

@section('title')
    @lang('sidebar.create_sub_category')
@endsection
@section('active')
    create_sub_categories
@endsection
@section('card_title')
    @lang('sidebar.create_sub_category')
@endsection

@section('content')
    <form class="form form-horizontal" action="{{route('dashboard.sub_categories.store')}}" method="post" enctype="multipart/form-data">
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
                <label class="col-md-3 label-control" for="name_ar">@lang('category.name_ar')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="name_ar" class="form-control" placeholder="@lang('category.name_en')" name="name_ar" value="{{old('name_ar')}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="name_en">@lang('category.name_en')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="name_en" class="form-control" placeholder="@lang('category.name_en')" name="name_en" value="{{old('name_en')}}">
                </div>
            </div>

            <h4 class="form-section"><i class="la la-folder-open"></i> @lang('sub.category_name')</h4>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="category">@lang('sub.category_name')</label>
                <div class="col-md-9 mx-auto">
                    <select id="category" name="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" {{old('category')  ==  $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
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

        <h4 class="form-section"><i class="la la-file-image-o" style="font-size: 20px"></i> @lang('global.images')</h4>

        <div class="form-group row">
            <label class="col-md-3 label-control" for="icon_map">@lang('category.icon_map')</label>
            <div class="col-md-9 mx-auto">
                <input type="file" id="icon_map" class="form-control" placeholder="@lang('category.icon_map')" name="icon_map"  accept="image/jpeg , image/png ,image/gif,image/jpg, image/svg"  value="{{old('icon_map')}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 label-control" for="icon_category">@lang('category.icon_category')</label>
            <div class="col-md-9 mx-auto">
                <input type="file" id="icon_category" class="form-control" placeholder="@lang('category.icon_category')"  accept="image/jpeg , image/png ,image/gif,image/jpg, image/svg" name="icon_category" value="{{old('icon_category')}}">
            </div>
        </div>
        <h4 class="form-section"><i class="la la-cog" style="font-size: 20px"></i> @lang('global.setting')</h4>
        <div class="form-group row">
            <label class="col-md-3 label-control" for="priority">@lang('category.priority')</label>
            <div class="col-md-9 mx-auto">
                <input type="number" min="0" id="priority" class="form-control" placeholder="@lang('category.priority')" name="priority" value="{{old('priority')}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 label-control" for="feature">@lang('category.is_feature')</label>
            <div class="col-md-9 mx-auto">
                <select id="feature" name="feature" class="form-control">
                    <option value="1" {{old('feature') == 1 ? 'selected' :''}}>@lang('global.yes_feature')</option>
                    <option value="0" {{old('feature') == 0 ? 'selected' :''}}>@lang('global.not_feature')</option>
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
@endsection
