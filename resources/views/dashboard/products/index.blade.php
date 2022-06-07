@extends('dashboard.layouts.master')

@section('title')
    @lang('sidebar.all_products')
@endsection
@section('active')
all_products
@endsection
@section('card_title')
    @lang('sidebar.all_products')
@endsection

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm mb-0 caption-top">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">المنتج</th>
                <th scope="col">السعر</th>
                <th scope="col">الخصم</th>
                <th scope="col">نوع الخصم</th>
                <th scope="col">كود المنتج</th>
                <th scope="col">القسم</th>
                <th scope="col">القسم الفرعي</th>
                <th scope="col">نوع المنتج</th>
                <th scope="col">الماتريال</th>
                <th scope="col">الأبعاد</th>
                <th scope="col">اللون</th>
                <th scope="col">التاريخ المتوقع للتوصيل</th>
                <th scope="col">الوصف</th>
                <th scope="col">صورة المنتج</th>
                <th scope="col">حالة المنتج</th>
                <th scope="col">تعديل</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $i =>  $product)
                <tr class="p-0">
                    <td>{{$i + 1}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount}}</td>
                    <td>{{$product->discount_type}}</td>
                    <td>{{$product->code}}</td>
                    <td>{{$product->category ? $product->category->name : 'لا يوجد'}}</td>
                    <td>{{$product->subCategory ? $product->subCategory->name : 'لا يوجد'}}</td>
                    <td>{{$product->product_type}}</td>
                    <td>{{$product->materials}}</td>
                    <td>{{$product->dimensions}}</td>
                    <td>{{$product->color}}</td>
                    <td>{{$product->estimated_delivery}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        @if ($product->main_image)
                            <img src="{{asset($product->main_image)}}" alt="image"
                                style="width:60px;height:50px">
                        @else
                             لا يوجد
                        @endif
                    </td>
                    <td>
                        <b class="badge badge{{$product->status == 1 ? '-success' : '-danger'}} badge-sm">@lang('global.status_' .$product->status )</b>
                    </td>
                    <td>
                        <a href="{{route("dashboard.products.edit", $product->id)}}" class="btn btn-outline-primary btn-sm">
                            <i class="la la-edit"></i>
                        </a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        {{$products->links()}}
    </div>
@endsection


@section('script')
@endsection
