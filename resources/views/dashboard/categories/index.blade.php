@extends('dashboard.layouts.master')

@section('title')
    @lang('sidebar.categories')
@endsection

@section('active')
    all_categories
@endsection
@section('card_title')
    @lang('sidebar.categories')
@endsection

@section('content')

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm mb-0 caption-top">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">الاسم</th>
                <th scope="col">Slug</th>
                <th scope="col">كود الصنف</th>
                <th scope="col">الترتيب</th>
                <th scope="col">تم الانشاء بواسطة	</th>
                <th scope="col">الحالة</th>
                <th scope="col">تعديل</th>
            </tr>
            </thead>
           <tbody>
           @foreach($categories as $i =>  $category)
               <tr class="p-0">
                   <td>{{$i + 1}}</td>
                   <td>{{str_limit($category->name,10)}}</td>
                   <td title="{{$category->slug}}">{{str_limit($category->slug,10)}}</td>
                   <td title="{{$category->category_code}}">{{$category->category_code}}</td>
                   <td title="{{$category->seo_title}}">{{str_limit($category->seo_title,7)}}</td>
                   <td>{{$category->adminId->name}}</td>
                   <td>
                       <b class="badge badge{{$category->status == 1 ? '-success' : '-danger'}} badge-sm">@lang('global.status_' .$category->status )</b>
                   </td>
                   <td>
                       <a href="{{route("dashboard.categories.edit", $category->id)}}" class="btn btn-outline-primary btn-sm">
                           <i class="la la-edit"></i>
                       </a>
                   </td>
               </tr>
           @endforeach
           </tbody>
        </table>
        {{$categories->links()}}
    </div>
@endsection


@section('script')
@endsection
