<!DOCTYPE html>
<html lang="{{App::getLocale()}}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>

    @yield("description")
    @yield("keywords")
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{URL::asset("assets/images/favicon.png")}}">
    <!-- Style CSS -->
    @toastr_css
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset("assets/css/stylesheet.css")}}">
    <link rel="stylesheet" href="{{URL::asset("assets/css/pagination.css")}}">
    @if(App::getLocale() == 'ar')
        <link rel="stylesheet" href="{{URL::asset("assets/css/stylesheet_rtl.css")}}">
    @endif
    <link rel="stylesheet" href="{{URL::asset("assets/css/mmenu.css")}}">
    <link rel="stylesheet" href="{{URL::asset("assets/css/perfect-scrollbar.css")}}">
    <link rel="stylesheet" href="{{URL::asset("assets/css/style.css")}}" id="colors">
    <!-- Google Font -->
    @yield("css")
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap&subset=latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
</head>
<body>
