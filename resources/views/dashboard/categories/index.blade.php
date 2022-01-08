@extends('dashboard.layout.master')
@section('title')
   @lang('sidebar.all_categories')
@endsection
@section('active')
    categories
@endsection
@section('content')
    <div class="utf_dashboard_content">
        <div id="titlebar" class="dashboard_gradient">
            <div class="row">
                <div class="col-md-12">
                    <h2>@lang('sidebar.all_categories')</h2>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="{{route("dashboard.home")}}">@lang('sidebar.home')</a></li>
                            <li>@lang('sidebar.all_categories')</li>
                        </ul>
                    </nav>
                </div>
                <!-- Your Start From Here -->
                <div class="col-md-12 mb-4">
                    <div class="utf_dashboard_list_box">
                        <h4>@lang('sidebar.all_categories')</h4>
                        <div class=" table-responsive text-center">
                            <table class="table table-hover table-bordered">
                                <thead class="text-center">
                                <tr>
                                    <th colspan="col"  class="padding-right-0 padding-left-0 text-center">#</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang("global.name")</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang('global.slug')</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang('category.seo_title')</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang('category.is_feature')</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang('category.priority')</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang('global.created_by')</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang('global.status')</th>
                                    <th colspan="col" class="padding-right-0 padding-left-0 text-center">@lang('global.edit')</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $i =>  $category)
                                        <tr>
                                            <td>{{$i + 1}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->slug}}</td>
                                            <td>{{$category->seo_title}}</td>
                                            <td>{{$category->is_feature}}</td>
                                            <td>{{$category->priority}}</td>
                                            <td>{{$category->adminId->name}}</td>
                                            <td>
                                                <b class="badge badge{{$category->status == 1 ? '-success' : '-canceled'}}">@lang('global.status_' .$category->status )</b>
                                            </td>
                                            <td>
                                                <a href="{{route("dashboard.categories.edit", $category->id)}}" class="btn btn-primary btn-sm">
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
                        {{$categories->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
    </script>
@endsection
