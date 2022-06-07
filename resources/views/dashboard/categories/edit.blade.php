@extends('dashboard.layouts.master')

@section('title')
    @lang('category.edit_category')
@endsection
@section('active')
    categories
@endsection
@section('card_title')
    @lang('category.edit_category')
@endsection

@section('content')
    <form class="form form-horizontal" action="{{route('dashboard.categories.update', $category->id)}}" method="post" enctype="multipart/form-data">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert bg-danger alert-icon-left alert-arrow-left alert-dismissible mb-2" role="alert">
                    <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {{$error}}
                </div>
            @endforeach
        @endif
        @csrf
        {{method_field('put')}}
        <div class="form-body">
            <h4 class="form-section"><i class="la la-folder-open"></i> @lang('global.name')</h4>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="name">@lang('category.name')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="name" class="form-control" placeholder="@lang('category.name')" name="name" value="{{$category->name}}">
                </div>
            </div>
            <h4 class="form-section"><i class="la la-industry" style="font-size: 20px"></i> @lang('global.seo_tools')</h4>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="slug">@lang('global.slug')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="slug" class="form-control" placeholder="@lang('global.slug')" name="slug" value="{{$category->slug}}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 label-control" for="seo">@lang('category.seo_title')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="seo" class="form-control" placeholder="@lang('category.seo_title')" name="seo" value="{{$category->seo_title}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 label-control" for="meta_desc">@lang('category.meta_description')</label>
                <div class="col-md-9 mx-auto">
                    <input type="text" id="meta_desc" class="form-control" placeholder="@lang('category.meta_description')" name="meta_desc" value="{{$category->meta_description}}">
                </div>
            </div>

        </div>
        <h4 class="form-section"><i class="la la-cog" style="font-size: 20px"></i> @lang('global.setting')</h4>
        <div class="form-group row">
            <label class="col-md-3 label-control" for="code_category">@lang('category.code_category')</label>
            <div class="col-md-9 mx-auto">
                <input type="number" min="1" id="code_category" class="form-control" placeholder="@lang('category.code_category')" name="code_category" value="{{$category->category_code}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 label-control" for="priority">@lang('category.priority')</label>
            <div class="col-md-9 mx-auto">
                <input type="number" min="0" id="priority" class="form-control" placeholder="@lang('category.priority')" name="priority" value="{{$category->priority}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-3 label-control" for="status">@lang('global.status')</label>
            <div class="col-md-9 mx-auto">
                <select id="status" name="status" class="form-control">
                    <option value="1"  {{$category->status == 1 ? 'selected' :''}}>@lang('global.active')</option>
                    <option value="0" {{$category->status == 0 ? 'selected' :''}}>@lang('global.deactivated')</option>
                </select>
            </div>
        </div>
        <div class="form-actions row">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">
                    <i class="la la-edit"></i>
                    @lang('global.edit')
                </button>
            </div>
        </div>
    </form>
@endsection


@section('script')
@endsection
