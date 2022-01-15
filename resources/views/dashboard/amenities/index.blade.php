@extends('dashboard.layouts.master')

@section('title')
    @lang('sidebar.amenities')
@endsection

@section('active')
    all_amenities
@endsection
@section('card_title')
    @lang('sidebar.amenities')
@endsection

@section('content')

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm mb-0 caption-top">
            <thead>
            <tr>
                <th colspan="col">#</th>
                <th colspan="col">@lang("global.name")</th>
                <th colspan="col">@lang('amenity.icon')</th>
                <th colspan="col">@lang('global.created_by')</th>
                <th colspan="col">@lang('global.status')</th>
                <th colspan="col">@lang('global.edit')</th>
            </tr>
            </thead>
           <tbody>
           @foreach($amenities as $i =>  $amenity)
               <tr>
                   <td>{{$i + 1}}</td>
                   <td>{{$amenity->name}}</td>
                   <td>
                       <img src="{{URL::to('public/files/amenities/'. $amenity->icon)}}" alt="" style="width:40px; margin-bottom: 10px">

                   </td>
                   <td>{{$amenity->adminId->name}}</td>
                   <td>
                       <b class="badge badge{{$amenity->status == 1 ? '-success' : '-danger'}}">@lang('global.status_' .$amenity->status )</b>
                   </td>
                   <td>
                       <a href="{{route("dashboard.amenities.edit", $amenity->id)}}" class="btn btn-outline-primary btn-sm">
                           <i class="la la-edit"></i>
                       </a>
                   </td>
               </tr>
           @endforeach
           </tbody>
        </table>
        {{$amenities->links()}}
    </div>
@endsection


@section('script')
@endsection
