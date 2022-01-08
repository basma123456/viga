@extends('dashboard.layout.master')
@section('title')
    @lang('sidebar.create_category')
@endsection
@section('active')
    categories
@endsection
@section('content')
    <div class="utf_dashboard_content">
        <div id="titlebar" class="dashboard_gradient">
            <div class="row">
                <div class="col-md-12">
                    <h2> @lang('sidebar.create_category')</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="{{route('dashboard.home')}}">@lang('sidebar.home')</a></li>
                            <li>@lang('sidebar.create_category')</li>
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
                    <h3><i class="sl sl-icon-plus"></i> @lang('sidebar.create_category')</h3>
                </div>
                <form action="{{route("dashboard.categories.store")}}" method="POST" enctype="multipart/form-data">
                   @csrf
                    {{method_field('post')}}
                    <div class="row with-forms margin-bottom-5">
                        <div class="col-md-6">
                            <h5>@lang('category.name_en')</h5>
                            <input type="text" class="" name="name_en" id="name_en" placeholder="@lang('category.name_en')" value="{{old('name_en')}}">
                           @error('name_en')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <h5>@lang('category.name_ar')</h5>
                            <input type="text" class="" name="name_ar" id="name_ar" placeholder="@lang('category.name_ar')" value="{{old('name_ar')}}">
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
                            <input type="text" name="slug" id="slug" placeholder="@lang('global.slug')..." value="">
                            @error('slug')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <h5>@lang('category.meta_description')</h5>
                            <input type="text" class="" name="meta_desc" id="mete_desc" placeholder="@lang('category.meta_description')" value="{{old('meta_desc')}}">
                            @error('meta_desc')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <h5>@lang('category.seo_title')</h5>
                            <input type="text" class="" name="seo" id="seo" placeholder="@lang('category.seo_title')" value="{{old('seo')}}">
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
                            <h5>@lang('category.priority')</h5>
                            <input type="number" min="0" step="1" class="search-field" name="priority" id="priority" placeholder="@lang("category.priority")" value="{{old('priority')}}">
                            @error('priority')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <h5>@lang('category.is_feature')</h5>
                            <div class="intro-search-field ">
                                <select name="feature" id="">
                                    <option value="1" {{old('feature') == 1 ? 'selected' : ''}}>@lang('global.yes_feature')</option>
                                    <option value="0" {{old('feature') == 0 ? 'selected' : ''}}>@lang('global.not_feature')</option>
                                </select>
                            </div>
                            @error('feature')
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
                                    <option value="1" {{old('status') == 1 ? 'selected' : ''}}>@lang('global.active')</option>
                                    <option value="0" {{old('status') == 0 ? 'selected' : ''}}>@lang('global.deactivated')</option>
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
                            <label  for="icon_map">@lang("category.icon_map")</label>
                            <input type="file" name="icon_map"  id="icon_map" accept="image/*">
                            </div>
                            @error('icon_map')
                            <div class="notification error closeable" >
                                <p>{{ $message }}</p>
                                <a class="close"></a>
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 utf_submit_section">
                            <div class="intro-search-field ">
                                <label for="icon_category">@lang("category.icon_category")</label>
                                <input type="file" name="icon_category"  id="icon_category" accept="image/*">
                            </div>
                            @error('icon_category')
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
