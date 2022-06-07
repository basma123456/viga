@extends('dashboard.layouts.master')

@section('title')
    @lang('sidebar.settings')
@endsection
@section('active')
   SectionOne
@endsection
@section('card_title')
    @lang('sidebar.settings')
@endsection

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm mb-0 caption-top">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">من نحن</th>
                <th scope="col">رؤيتنا</th>
                <th scope="col">البريد الالكتروني</th>
                <th scope="col">رقم التليفون</th>
                <th scope="col">العنوان</th>
                <th scope="col">الفيسبوك</th>
                <th scope="col">تويتر</th>
                <th scope="col">انستغرام</th>
                <th scope="col">تعديل</th>
            </tr>
            </thead>
            <tbody>
            @foreach($settings as $i =>  $setting)
                <tr class="p-0">
                    <td>{{$i + 1}}</td>
                    <td>{{$setting->title}}</td>
                    <td>{{$setting->vision}}</td>
                    <td>{{$setting->email}}</td>
                    <td>{{$setting->phone}}</td>
                    <td>{{$setting->location}}</td>
                    <td>{{$setting->facebook}}</td>
                    <td>{{$setting->twitter}}</td>
                    <td>{{$setting->instgram}}</td>
                    <td>
                        <a href="{{route("dashboard.settings.edit", $setting->id)}}" class="btn btn-outline-primary btn-sm">
                            <i class="la la-edit"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$settings->links()}}
    </div>
@endsection


@section('script')
@endsection
