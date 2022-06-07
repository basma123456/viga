@extends('dashboard.layouts.master')

@section('title')
    تعديل علي الأعدادات
@endsection
@section('active')
    edit_Settings
@endsection
@section('card_title')
    تعديل علي الأعدادات
@endsection

@section('content')

    <form action="{{route("dashboard.settings.update", $setting->id)}}" method="post">
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
            <h4 class="form-section"><i class="la la-folder-open"></i> تعديل الأعدادات</h4>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="title">من نحن</label>
                <div class="col-md-9 mx-auto">
                    <textarea id="title" class="form-control" name="title" placeholder="من نحن">{{$setting->title}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="vision">رؤيتنا</label>
                <div class="col-md-9 mx-auto">
                    <textarea id="vision" class="form-control" name="vision" placeholder="رؤيتنا">{{$setting->vision}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="email">البريد الألكتروني</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="email" class="form-control" name="email" placeholder="البريد الألكتروني" value="{{$setting->email}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="phone">رقم التليفون</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="phone" class="form-control" name="phone" placeholder="رقم التليفون" value="{{$setting->phone}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="location">العنوان</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="location" class="form-control" name="location" placeholder="العنوان" value="{{$setting->location}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="facebook">الفيسبوك</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="facebook" class="form-control" name="facebook" placeholder="الفيسبوك" value="{{$setting->facebook}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="twitter">تويتر</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="twitter" class="form-control" name="twitter" placeholder="تويتر" value="{{$setting->twitter}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="instgram">انستغرام</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="instgram" class="form-control" name="instgram" placeholder="انستغرام" value="{{$setting->instgram}}">
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
