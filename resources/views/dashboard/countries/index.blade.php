@extends('dashboard.layouts.master')

@section('title')
    @lang('sidebar.countries')
@endsection

@section('active')
    all_countries
@endsection
@section('card_title')
    @lang('sidebar.countries')
@endsection

@section('content')

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm mb-0 caption-top">
            <thead>
            <tr>
                <th colspan="col">#</th>
                <th colspan="col">@lang("global.name")</th>
                <th colspan="col">@lang('global.slug')</th>
                <th colspan="col">@lang('global.created_by')</th>
                <th colspan="col">@lang('global.status')</th>
                <th colspan="col">@lang('global.edit')</th>
            </tr>
            </thead>
           <tbody>
           @foreach($countries as $i =>  $country)
               <tr>
                   <td>{{$i + 1}}</td>
                   <td>{{$country->name}}</td>
                   <td>{{$country->slug}}</td>
                   <td>{{$country->adminId->name}}</td>
                   <td>
                       <b class="badge badge{{$country->status == 1 ? '-success' : '-danger'}}">@lang('global.status_' .$country->status )</b>
                   </td>
                   <td>
                       <a href="{{route("dashboard.countries.edit", $country->id)}}" class="btn btn-primary btn-sm">
                           <i class="la la-edit"></i>
                       </a>
                   </td>
               </tr>
           @endforeach
           </tbody>
        </table>
        {{$countries->links()}}
    </div>
@endsection


@section('script')
@endsection
