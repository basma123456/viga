@extends('dashboard.layouts.master')

@section('title')
    تعديل علي السيكشن الأول
@endsection
@section('active')
    edit_SectionOne
@endsection
@section('card_title')
    تعديل علي السيكشن لأول
@endsection

@section('content')

    <form action="{{route("dashboard.SectionOne.update", $SectionOne->id)}}" method="post">
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
            <h4 class="form-section"><i class="la la-folder-open"></i> تعديل السكشن الأول</h4>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="name">الأسم</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="name" class="form-control" name="name" placeholder="الأسم" value="{{$SectionOne->name}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="title">العنوان</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="title" class="form-control" name="title" placeholder="العنوان" value="{{$SectionOne->title}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="paragraph">الموضوع</label>
                <div class="col-md-9 mx-auto">
                    <textarea  id="paragraph" class="form-control" name="paragraph" placeholder="الموضوع">{{$SectionOne->title}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="offer_name">أسم العرض</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="offer_name" class="form-control" name="offer_name" placeholder="أسم العرض" value="{{$SectionOne->offer_name}}">
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
