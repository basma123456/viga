@extends('dashboard.layouts.master')

@section('title')
    @lang('sidebar.all_materials')
@endsection
@section('active')
    all_materials
@endsection
@section('card_title')
    @lang('sidebar.all_materials')
@endsection

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm mb-0 caption-top">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">الاسم</th>
                <th scope="col">الحالة</th>
                <th scope="col">تعديل</th>
                <th scope="col">حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($materials as $i =>  $material)
                <tr class="p-0">
                    <td>{{$i + 1}}</td>
                    <td>{{$material->name}}</td>
                    <td>
                        <b class="badge badge{{$material->status == 1 ? '-success' : '-danger'}} badge-sm">@lang('global.status_' .$material->status )</b>
                    </td>
                    <td>
                        <a href="{{route("dashboard.materials.edit", $material->id)}}" class="btn btn-outline-primary btn-sm">
                            <i class="la la-edit"></i>
                        </a>
                    </td>

                    <td>
                        <form action="{{route("dashboard.materials.destroy", $material->id)}}" method="post">
                            @csrf
                            {{method_field('delete')}}
                            <button type="submit" class="btn btn-outline-danger btn-sm"><i class="la la-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$materials->links()}}
    </div>
@endsection


@section('script')
@endsection
