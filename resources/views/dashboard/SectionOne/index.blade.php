@extends('dashboard.layouts.master')

@section('title')
    @lang('sidebar.SectionOne')
@endsection
@section('active')
   SectionOne
@endsection
@section('card_title')
    @lang('sidebar.SectionOne')
@endsection

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm mb-0 caption-top">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">الأسم</th>
                <th scope="col">العنوان</th>
                <th scope="col">الموضوع</th>
                <th scope="col">أسم العرض</th>
                <th scope="col">تعديل</th>
                <th scope="col">حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($SectionOne as $i =>  $price)
                <tr class="p-0">
                    <td>{{$i + 1}}</td>
                    <td>{{$price->name}}</td>
                    <td>{{$price->title}}</td>
                    <td>{{$price->paragraph}}</td>
                    <td>{{$price->offer_name}}</td>
                    <td>
                        <a href="{{route("dashboard.SectionOne.edit", $price->id)}}" class="btn btn-outline-primary btn-sm">
                            <i class="la la-edit"></i>
                        </a>
                    </td>

                    <td>
                        <form action="{{route("dashboard.SectionOne.destroy", $price->id)}}" method="post">
                            @csrf
                            {{method_field('delete')}}
                            <button type="submit" class="btn btn-outline-danger btn-sm"><i class="la la-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$SectionOne->links()}}
    </div>
@endsection


@section('script')
@endsection
