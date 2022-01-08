@extends('dashboard.layout.master')
@section('title')
    @lang('amenity.edit_amenity')
@endsection
@section('active')
    amenities
@endsection
@section('content')
    <div class="utf_dashboard_content">
        <div id="titlebar" class="dashboard_gradient">
            <div class="row">
                <div class="col-md-12">
                    <h2> @lang('amenity.edit_amenity')</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="{{route('dashboard.home')}}">@lang('sidebar.home')</a></li>
                            <li>@lang('amenity.edit_amenity')</li>
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
                    <h3><i class="sl sl-icon-plus"></i> @lang('amenity.edit_amenity')</h3>
                </div>
                <form action="{{route("dashboard.amenities.update",$amenity->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('put')}}
                    <div class="row with-forms margin-bottom-5">
                        <div class="col-md-6">
                            <h5>@lang('amenity.name_en')</h5>
                            <input type="text" class="" name="name_en" id="name_en" placeholder="@lang('amenity.name_en')" value="{{$amenity->getTranslation('name','en')}}">
                            @error('name_en')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <h5>@lang('amenity.name_ar')</h5>
                            <input type="text" class="" name="name_ar" id="name_ar" placeholder="@lang('amenity.name_ar')" value="{{$amenity->getTranslation('name','ar')}}">
                            @error('name_ar')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row with-forms margin-bottom-5">
                        <div class="col-md-6 utf_submit_section">
                            <div class="intro-search-field ">
                                <label for="icon_category">@lang("amenity.icon")
                                    <img src="{{URL::to('public/files/amenities/'. $amenity->icon)}}" alt="" style="width:50px; margin-bottom: 10px">
                                </label>
                                <input type="file" name="icon"  id="icon" accept="image/*" class="margin-bottom-0">
                                <small class="text-danger"><b>@lang('global.wont_change_image')</b></small>
                            </div>
                            @error('icon')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <h5>@lang('global.status')</h5>
                            <div class="intro-search-field ">
                                <select name="status" id="">
                                    <option value="1" {{$amenity->status == 1 ? 'selected' : ''}}>@lang('global.active')</option>
                                    <option value="0" {{$amenity->status == 0 ? 'selected' : ''}}>@lang('global.deactivated')</option>
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

                    <div class="row text-center btn-sm">
                        <button type="submit" class="button">@lang('global.edit')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{URL::asset("assets/scripts/dropzone.js")}}"></script>
@endsection
