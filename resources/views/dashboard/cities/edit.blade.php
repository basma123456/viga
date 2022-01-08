@extends('dashboard.layout.master')
@section('title')
    @lang('city.edit_city')
@endsection
@section('active')
    cities
@endsection
@section('content')
    <div class="utf_dashboard_content">
        <div id="titlebar" class="dashboard_gradient">
            <div class="row">
                <div class="col-md-12">
                    <h2> @lang('city.edit_city')</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="{{route('dashboard.home')}}">@lang('sidebar.home')</a></li>
                            <li>@lang('city.edit_city')</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Title Bar-->
        <div class="col-md-12">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="notification error closeable" >
                        <p>{{ $error }}</p>
                        <a class="close"></a>
                    </div>
                @endforeach
            @endif
            <div class="add_utf_listing_section margin-top-45">
                <div class="utf_add_listing_part_headline_part">
                    <h3><i class="sl sl-icon-plus"></i> @lang('city.edit_city')</h3>
                </div>
                <form action="{{route("dashboard.cities.update", $city->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('put')}}
                    <div class="row with-forms margin-bottom-5">
                        <div class="col-md-4">
                            <h5>@lang('city.country')</h5>
                            <div class="intro-search-field ">
                                <select name="country" id="">
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}" {{$city->country_id == $country->id ? 'selected' : ''}}>{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            @error('country')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <h5>@lang('city.name_en')</h5>
                            <input type="text" class="" name="name_en" id="name_en" placeholder="@lang('city.name_en')" value="{{$city->getTranslation('name', 'en')}}">
                            @error('name_en')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <h5>@lang('city.name_ar')</h5>
                            <input type="text" class="" name="name_ar" id="name_ar" placeholder="@lang('city.name_ar')" value="{{$city->getTranslation('name', 'ar')}}">
                            @error('name_ar')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row with-forms margin-bottom-5">
                        <div class="col-md-4">
                            <h5>@lang('global.slug')</h5>
                            <input type="text" name="slug" id="slug" placeholder="@lang('global.slug')..." value="{{$city->slug}}">
                            @error('slug')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <h5>@lang('city.meta_description')</h5>
                            <input type="text" class="" name="meta_desc" id="mete_desc" placeholder="@lang('city.meta_description')" value="{{$city->meta_description}}">
                            @error('meta_desc')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <h5>@lang('city.seo_title')</h5>
                            <input type="text" class="" name="seo" id="seo" placeholder="@lang('city.seo_title')" value="{{$city->seo_title}}">
                            @error('seo')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>

                    </div>
                    <!-- Start Row From-->

                    <div class="row with-forms margin-bottom-5">
                        <div class="col-md-4">
                            <h5>@lang('city.latitude')</h5>
                            <input type="text" name="latitude" id="slug" placeholder="@lang('city.latitude')..." value="{{$city->latitude}}">
                            @error('latitude')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <h5>@lang('city.longitude')</h5>
                            <input type="text" name="longitude" id="longitude" placeholder="@lang('city.longitude')..." value="{{$city->longitude}}">
                            @error('longitude')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <h5>@lang('global.status')</h5>
                            <div class="intro-search-field ">
                                <select name="status" id="">
                                    <option value="1" {{$city->status == 1 ? 'selected' : ''}}>@lang('global.active')</option>
                                    <option value="0" {{$city->status == 0 ? 'selected' : ''}}>@lang('global.deactivated')</option>
                                </select>
                            </div>

                            @error('status')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>

                    </div>
                    <!-- End Row From-->

                    <!-- Start Row From-->
                    <div class="row with-forms margin-bottom-5">
                        <div class="col-md-6 utf_submit_section">
                            <div class="intro-search-field ">
                                <label  for="thumbnail">@lang("city.thumbnail_image")
                                    <img src="{{URL::to('public/files/cities/thumbnail/'. $city->thumbnail_image)}}" alt="" style="width:50px; margin-bottom: 10px">

                                </label>
                                <input type="file" name="thumbnail"  id="thumbnail" accept="image/*" class="margin-bottom-0">
                                <small class="text-danger"><b>@lang('global.wont_change_image')</b></small>
                            </div>
                            @error('thumbnail')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 utf_submit_section">
                            <div class="intro-search-field ">
                                <label for="banner">@lang("city.banner_image")
                                    <img src="{{URL::to('public/files/cities/banner/'. $city->banner_image)}}" alt="" style="width:50px; margin-bottom: 10px">
                                </label>
                                <input type="file" name="banner"  id="banner" accept="image/*" class="margin-bottom-0">
                                <small class="text-danger"><b>@lang('global.wont_change_image')</b></small>
                            </div>
                            @error('banner')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <!-- End Row From-->
                    <div class="row text-center btn-sm">
                        <button type="submit" class="button">@lang('global.create')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{URL::asset("assets/scripts/dropzone.js")}}"></script>
@endsection
