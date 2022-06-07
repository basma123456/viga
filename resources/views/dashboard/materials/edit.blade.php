@extends('dashboard.layouts.master')

@section('title')
    تعديل خامة
@endsection
@section('active')
    create_material
@endsection
@section('card_title')
    تعديل خامة
@endsection

@section('content')

    <form action="{{route("dashboard.materials.update", $material->id)}}" method="post">
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
            <h4 class="form-section"><i class="la la-folder-open"></i> تعديل خامة</h4>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="name">الاسم</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="name" class="form-control" name="name" placeholder="اسم الخامة" value="{{$material->name}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="status">@lang('global.status')</label>
                <div class="col-md-9 mx-auto">
                    <select id="status" name="status" class="form-control">
                        <option value="1"  {{$material->status === 1 ? 'selected' :''}}>@lang('global.active')</option>
                        <option value="0" {{$material->status === 0 ? 'selected' :''}}>@lang('global.deactivated')</option>
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
