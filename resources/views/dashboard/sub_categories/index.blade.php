@extends('dashboard.layouts.master')

@section('title')
    @lang('sidebar.sub_categories')
@endsection

@section('active')
    all_sub_categories
@endsection
@section('card_title')
    @lang('sidebar.sub_categories')
@endsection

@section('content')

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm mb-0 caption-top">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">@lang('global.name')</th>
                <th scope="col">@lang('sub.category_name')</th>
                <th scope="col">@lang('global.slug')</th>
                <th scope="col">@lang('category.priority')</th>
                <th scope="col">@lang('global.created_by')</th>
                <th scope="col">@lang('global.status')</th>
                <th scope="col">@lang('global.edit')</th>
            </tr>
            </thead>
           <tbody>
           @foreach($sub_categories as $i =>  $category)
               <tr>
                   <td>{{$i + 1}}</td>
                   <td>{{$category->name}}</td>
                   <td>{{$category->category->name}}</td>
                   <td>{{$category->slug}}</td>
                   <td>{{$category->priority}}</td>
                   <td>{{$category->adminId->name}}</td>
                   <td>
                       <b class="badge badge{{$category->status == 1 ? '-success' : '-danger'}}">@lang('global.status_' .$category->status )</b>
                   </td>
                   <td>
                       <a href="{{route("dashboard.sub_categories.edit", $category->id)}}" class="btn btn-primary btn-sm">
                           <i class="la la-edit"></i>
                       </a>
                   </td>
               </tr>
           @endforeach
           </tbody>
        </table>
        {{$sub_categories->links()}}
    </div>
@endsection


@section('script')
@endsection
