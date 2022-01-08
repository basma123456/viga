@extends('dashboard.layout.master')
@section('title')
   @lang('sidebar.all_cities')
@endsection
@section('active')
    cities
@endsection
@section('content')
    <div class="utf_dashboard_content">
        <div id="titlebar" class="dashboard_gradient">
            <div class="row">
                <div class="col-md-12">
                    <h2>@lang('sidebar.all_cities')</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="{{route("dashboard.home")}}">@lang('sidebar.home')</a></li>
                            <li>@lang('sidebar.all_cities')</li>
                        </ul>
                    </nav>
                </div>
                <!-- Your Start From Here -->
                <div class="col-md-12 mb-4">
                    <div class="utf_dashboard_list_box">
                        <h4>@lang('sidebar.all_cities')</h4>
                        <div class=" table-responsive text-center">
                            <table class="table table-hover table-bordered">
                                <thead class="text-center">
                                <tr>
                                    <th colspan="col"  class="padding-right-0 padding-left-0 text-center">#</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang("global.name")</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang('city.country')</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang('global.slug')</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang('city.seo_title')</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang('city.meta_description')</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang('city.latitude')</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang('city.longitude')</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang('global.created_by')</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang('global.status')</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang('global.edit')</th>
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
                                                <b class="badge badge{{$city->status == 1 ? '-success' : '-canceled'}}">@lang('global.status_' .$city->status )</b>
                                            </td>
                                            <td>
                                                <a href="{{route("dashboard.cities.edit", $city->id)}}" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Your End Is Here   -->
                <div class="col-md-12 margin-top-50">
                        {{$cities->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
    </script>
@endsection
