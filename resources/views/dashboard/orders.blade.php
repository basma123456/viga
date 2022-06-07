@extends('dashboard.layouts.master')

@section('title')
    Orders
@endsection
@section('active')
    Orders
@endsection
@section('card_title')
    Orders
@endsection

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm mb-0 caption-top">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">الأسم</th>
                <th scope="col">المنتج</th>

                <th scope="col">العنوان</th>
                <th scope="col">التليغون</th>

                <th scope="col">الاجمالي</th>
                <th scope="col">التاريخ</th>
                <th scope="col">الغاء</th>

            </tr>
            </thead>
            <tbody>
            @foreach($orders as $i =>  $order)
                <tr class="p-0">
                    <td>{{$i + 1}}</td>
                    <td>{{$order->users->full_name}}</td>
                    <td>
                    @foreach($order->orders as $item)
                            المنتج :   <span class="text-info">{{$item->products->title}}</span>
                        <br>
                            السعر قبل الخصم :  <span class="text-danger">{{$item->products->price}}</span>
                        <br>
                            السعر بعد الخصم :   <span class="text-primary">{{$item->products->price_after_discount}}</span>

                            <br>
                            الكمية :   <span class="text-primary">{{$item->quantity}}</span>
                            <br>
                            الاجمالي :   <span class="text-primary">{{$item->total}}</span>

                            <hr>
                        <br>
                    @endforeach
                    </td>
                    <td>
                        @isset($order->ShippingAddresses)
                        {{ $order->ShippingAddresses->country . ' '
                        . $order->ShippingAddresses->city .  ' '
                        . $order->ShippingAddresses->street_name .  ' '
                        . $order->ShippingAddresses->landmark .  ' '
                        . $order->ShippingAddresses->building_name }}
                            <br> {{ 'Instructions : '
                            . $order->ShippingAddresses->delivery_instructions
                            .  ' Phone : '
                            . $order->ShippingAddresses->phone_number}}
                            @else
                        {{ $order->users->country . ' ' . $order->users->city .  ' '
                        . $order->users->street_name .  ' '
                        . $order->users->landmark .  ' '
                        . $order->users->building_name }}

                            <br> {{ 'Instructions : '
                            . $order->users->delivery_instructions }} <br> {{ 'Phone : '
                            . $order->users->phone_number}}

                        @endisset
                    </td>
                    <td>{{$order->users->phone_number}}</td>

                    <td><span class="badge badge-lg badge-success">{{$order->total}} &nbsp; L.E</span></td>
                    <td>{{$order->created_at}}</td>
                    <td>
                        <form  method="post" action="{{route('dashboard.delete.order' , $order->id)}}">
                            @csrf
                            <input type="hidden" value="{{$order->id}}" name="my_order">
                            <input type="submit" onclick="return confirm('هل انت متاكد من الغاء الاوردر الغاء نهائي ؟')" class="btn btn-outline-danger" value="الغاء" />
                        </form>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        {{$orders->links()}}
    </div>
@endsection


@section('script')
@endsection
{{--/***********************last**********/--}}

