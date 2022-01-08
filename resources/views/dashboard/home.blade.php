@extends('dashboard.layout.master')
@section('title')
    Home
@endsection
@section('active')
    home
@endsection
@section('content')
    <div class="utf_dashboard_content">
        <div id="titlebar" class="dashboard_gradient">
            <div class="row">
                <div class="col-md-12">
                    <h2>@lang("sidebar.home")</h2>

                </div>
            </div>
        </div>
    </div>
@endsection
