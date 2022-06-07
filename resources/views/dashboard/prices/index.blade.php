@extends('dashboard.layouts.master')

@section('title')
    @lang('sidebar.all_prices')
@endsection
@section('active')
   all_prices
@endsection
@section('card_title')
    @lang('sidebar.all_prices')
@endsection

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm mb-0 caption-top">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">السعر</th>
                <th scope="col">الحالة</th>
                <th scope="col">تعديل</th>
                <th scope="col">حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($prices as $i =>  $price)
                <tr class="p-0">
                    <td>{{$i + 1}}</td>
                    <td>{{$price->name}}</td>
                    <td>
                        <b class="badge badge{{$price->status == 1 ? '-success' : '-danger'}} badge-sm">@lang('global.status_' .$price->status )</b>
                    </td>
                    <td>
                        <a href="{{route("dashboard.prices.edit", $price->id)}}" class="btn btn-outline-primary btn-sm">
                            <i class="la la-edit"></i>
                        </a>
                    </td>

                    <td>
                        <form action="{{route("dashboard.prices.destroy", $price->id)}}" method="post">
                            @csrf
                            {{method_field('delete')}}
                            <button type="submit" class="btn btn-outline-danger btn-sm"><i class="la la-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$prices->links()}}
    </div>
@endsection


@section('script')
@endsection
