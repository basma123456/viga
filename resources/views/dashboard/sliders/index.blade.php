@extends('dashboard.layouts.master')

@section('title')
    @lang('sidebar.sliders')
@endsection
@section('active')
    sliders
@endsection
@section('card_title')
    @lang('sidebar.sliders')
@endsection

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm mb-0 caption-top">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ألصورة</th>
                <th scope="col">الترتيب</th>
                <th scope="col">الحالة</th>
                <th scope="col">تعديل</th>
                <th scope="col">حذف</th>
            </tr>
            </thead>
            <tbody>

            @foreach($sliders as $i =>  $slider)
                <tr class="p-0">
                    <td>{{$i + 1}}</td>
                    <td>
                        <!--test-->
                        <img src="{{asset($slider->slider_image)}}" class="img-thumbnail shadow-1" style="border-radius: 50%; width: 50px; height: 50px" alt="">
                    </td>
                    <td>{{$slider->sorting}}</td>
                    <td>
                        <b class="badge badge{{$slider->status == 1 ? '-success' : '-danger'}} badge-sm">@lang('global.status_' .$slider->status )</b>
                    </td>
                    <td>
                        <a href="{{route("dashboard.sliders.edit", $slider->id)}}" class="btn btn-outline-primary btn-sm">
                            <i class="la la-edit"></i>
                        </a>
                    </td>

                    <td>
                        <form action="{{route("dashboard.sliders.destroy", $slider->id)}}" method="post">
                            @csrf
                            {{method_field('delete')}}
                            <button type="submit" class="btn btn-outline-danger btn-sm"><i class="la la-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$sliders->links()}}
    </div>
@endsection


@section('script')
@endsection
