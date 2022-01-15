@extends('dashboard.layouts.master')

@section('title')
    @lang('amenity.edit_amenity')
@endsection
@section('active')
    amenities
@endsection
@section('card_title')
    @lang('amenity.edit_amenity')
@endsection

@section('content')
    <form class="form form-horizontal" action="{{route('dashboard.amenities.update', $amenity->id)}}" method="post" enctype="multipart/form-data">
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
            <h4 class="form-section"><i class="la la-globe"></i> @lang('amenity.amenity_information')</h4>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="name_ar">@lang('amenity.name_ar')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="name_ar" class="form-control" placeholder="@lang('amenity.name_en')" name="name_ar" value="{{$amenity->getTranslation('name','ar')}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="name_en">@lang('amenity.name_en')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="name_en" class="form-control" placeholder="@lang('amenity.name_en')" name="name_en" value="{{$amenity->getTranslation('name','en')}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="icon">@lang('amenity.icon')</label>
                <div class="col-md-6 mx-auto">
                    <input type="file" name="icon" id="icon" class="form-control" accept="image/jpeg , image/png ,image/gif,image/jpg, image/svg">
                </div>
                <div class="col-md-3">
                    <img class="w-25" src="{{URL::to('public/files/amenities/'. $amenity->icon)}}" alt="Amenities Icon">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="status">@lang('global.status')</label>
                <div class="col-md-9 mx-auto">
                    <select id="status" name="status" class="form-control">
                        <option value="1"  {{$amenity->status == 1 ? 'selected' :''}}>@lang('global.active')</option>
                        <option value="0" {{$amenity->status  == 0 ? 'selected' :''}}>@lang('global.deactivated')</option>
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
