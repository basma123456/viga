@extends('dashboard.layouts.master')

@section('title')
    @lang('slider.edit_slider')
@endsection
@section('active')
   sliders
@endsection
@section('card_title')
    @lang('slider.edit_slider')
@endsection

@section('content')

    <form action="{{route("dashboard.sliders.update", $slider->id)}}" method="post" enctype="multipart/form-data">
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
            <h4 class="form-section"><i class="la la-folder-open"></i> @lang('slider.edit_slider')</h4>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="name">@lang('slider.image')</label>
                <div class="col-md-8 mx-auto">
                    <input type="file" id="name" class="form-control" name="image" accept="image/*">
                </div>
                <div class="col-md-1">
                    <img src="{{asset( $slider->slider_image)}}" class="img-thumbnail shadow-1" style="border-radius: 50%; width: 50px; height: 50px" alt="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="name">@lang('slider.sorting')</label>
                <div class="col-md-9 mx-auto">
                    <input type="number" id="sorting" class="form-control" name="sorting" value="{{$slider->sorting}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="status">@lang('global.status')</label>
                <div class="col-md-9 mx-auto">
                    <select id="status" name="status" class="form-control">
                        <option value="1"  {{$slider->status === 1 ? 'selected' :''}}>@lang('global.active')</option>
                        <option value="0" {{$slider->status === 0 ? 'selected' :''}}>@lang('global.deactivated')</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-actions row">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">
                    <i class="la la-edit"></i>
                    @lang('global.edit')
                </button>
            </div>
        </div>
    </form>
@endsection


@section('script')
@endsection
