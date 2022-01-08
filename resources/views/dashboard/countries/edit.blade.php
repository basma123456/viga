@extends('dashboard.layout.master')
@section('title')
    @lang('country.edit_country')
@endsection
@section('active')
    countries
@endsection
@section('content')
    <div class="utf_dashboard_content">
        <div id="titlebar" class="dashboard_gradient">
            <div class="row">
                <div class="col-md-12">
                    <h2> @lang('country.edit_country')</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="{{route('dashboard.home')}}">@lang('sidebar.home')</a></li>
                            <li>@lang('country.edit_country')</li>
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
                    <h3><i class="sl sl-icon-plus"></i> @lang('country.edit_country')</h3>
                </div>
                <form action="{{route("dashboard.countries.update",$country->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('put')}}
                    <div class="row with-forms margin-bottom-5">
                        <div class="col-md-6">
                            <h5>@lang('country.name_en')</h5>
                            <input type="text" class="" name="name_en" id="name_en" placeholder="@lang('country.name_en')" value="{{$country->getTranslation('name','en')}}">
                            @error('name_en')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <h5>@lang('country.name_ar')</h5>
                            <input type="text" class="" name="name_ar" id="name_ar" placeholder="@lang('country.name_ar')" value="{{$country->getTranslation('name','ar')}}">
                            @error('name_ar')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row with-forms margin-bottom-5">
                        <div class="col-md-6">
                            <h5>@lang('global.slug')</h5>
                            <input type="text" name="slug" id="slug" placeholder="@lang('global.slug')..." value="{{$country->slug}}">
                            @error('slug')
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
                                    <option value="1" {{$country->status == 1 ? 'selected' : ''}}>@lang('global.active')</option>
                                    <option value="0" {{$country->statu == 0 ? 'selected' : ''}}>@lang('global.deactivated')</option>
                                </select>,
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

@endsection
