@extends('dashboard.layouts.master')

@section('title')
    @lang('sidebar.create_city')
@endsection
@section('active')
    create_city
@endsection
@section('card_title')
    @lang('sidebar.create_city')
@endsection

@section('content')
    <form class="form form-horizontal" action="{{route('dashboard.cities.store')}}" method="post" enctype="multipart/form-data">
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
                <label class="col-md-3 label-control" for="name_ar">@lang('city.name_ar')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="name_ar" class="form-control" placeholder="@lang('city.name_ar')" name="name_ar" value="{{old('name_ar')}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="name_en">@lang('city.name_en')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="name_en" class="form-control" placeholder="@lang('city.name_en')" name="name_en" value="{{old('name_en')}}">
                </div>
            </div>

            <h4 class="form-section"><i class="la la-folder-open"></i> @lang('city.country')</h4>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="country">@lang('city.country')</label>
                <div class="col-md-9 mx-auto">
                    <select id="country" name="country" class="form-control">
                        @foreach($countries as $country)
                            <option value="{{$country->id}}" {{old('country') ==  $country->id ? 'selected' : ''}}>{{$country->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <h4 class="form-section"><i class="la la-folder-open"></i> @lang('global.position_in_map')</h4>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="latitude">@lang('city.latitude')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" class="form-control" name="latitude" id="latitude" placeholder="@lang('city.latitude')" value="{{old('latitude')}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="longitude">@lang('city.longitude')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" class="form-control" name="longitude" id="longitude" placeholder="@lang('city.longitude')" value="{{old('longitude')}}">
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
                <label class="col-md-3 label-control" for="seo">@lang('city.seo_title')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="seo" class="form-control" placeholder="@lang('city.seo_title')" name="seo" value="{{old('seo')}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="meta_desc">@lang('city.meta_description')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="meta_desc" class="form-control" placeholder="@lang('city.meta_description')" name="meta_desc" value="{{old('meta_desc')}}">
                </div>
            </div>

        </div>

        <h4 class="form-section"><i class="la la-file-image-o" style="font-size: 20px"></i> @lang('global.images')</h4>

        <div class="form-group row">
            <label class="col-md-3 label-control" for="icon_map">@lang('city.banner_image')</label>
            <div class="col-md-9 mx-auto">
                <input type="file" id="banner_image" class="form-control" placeholder="@lang('city.banner_image')" name="banner"  accept="image/jpeg , image/png ,image/gif,image/jpg, image/svg"  value="{{old('banner')}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 label-control" for="thumbnail_image">@lang('city.thumbnail_image')</label>
            <div class="col-md-9 mx-auto">
                <input type="file" id="thumbnail_image" class="form-control" placeholder="@lang('city.thumbnail_image')"  accept="image/jpeg , image/png ,image/gif,image/jpg, image/svg" name="thumbnail" value="{{old('thumbnail')}}">
            </div>
        </div>
        <h4 class="form-section"><i class="la la-cog" style="font-size: 20px"></i> @lang('global.setting')</h4>
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
                   <i class="la la-plus-square-o "></i>
                   @lang('global.create')
               </button>
           </div>
        </div>
    </form>
@endsection


@section('script')
@endsection
