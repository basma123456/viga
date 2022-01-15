@extends('dashboard.layouts.master')

@section('title')
    @lang('sidebar.cities')
@endsection

@section('active')
    all_cities
@endsection
@section('card_title')
    @lang('sidebar.cities')
@endsection

@section('content')

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm mb-0 caption-top">
            <thead>
            <tr>
                <th colspan="col">#</th>
                <th colspan="col">@lang("global.name")</th>
                <th colspan="col">@lang('city.country')</th>
                <th colspan="col">@lang('global.slug')</th>
                <th colspan="col">@lang('city.seo_title')</th>
                <th colspan="col">@lang('city.meta_description')</th>
                <th colspan="col">@lang('city.latitude')</th>
                <th colspan="col">@lang('city.longitude')</th>
                <th colspan="col">@lang('global.created_by')</th>
                <th colspan="col">@lang('global.status')</th>
                <th colspan="col">@lang('global.edit')</th>
            </tr>
            </thead>
           <tbody>
           @foreach($cities as $i =>  $city)
               <tr>
                   <td>{{$i + 1}}</td>
                   <td>{{$city->name}}</td>
                   <td>{{$city->country->name}}</td>
                   <td>{{$city->slug}}</td>
                   <td>{{$city->seo_title}}</td>
                   <td>{{$city->meta_description}}</td>
                   <td>{{$city->latitude}}</td>
                   <td>{{$city->longitude}}</td>
                   <td>{{$city->adminId->name}}</td>
                   <td>
                       <b class="badge badge{{$city->status == 1 ? '-success' : '-danger'}}">@lang('global.status_' .$city->status )</b>
                   </td>
                   <td>
                       <a href="{{route("dashboard.cities.edit", $city->id)}}" class="btn btn-primary btn-sm">
                           <i class="la la-edit"></i>
                       </a>
                   </td>
               </tr>
           @endforeach
           </tbody>
        </table>
        {{$cities->links()}}
    </div>
@endsection


@section('script')
@endsection
