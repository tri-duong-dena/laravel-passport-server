<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', \Config::get('site.name', ''))</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="/static/user/css/app.css" rel="stylesheet">
    @include('layouts.redux.styles')
    @section('styles')
    @show
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    </script>
</head>
<body class="{!! isset($bodyClasses) ? $bodyClasses : '' !!}">
<div id="app">
@yield('content')
</div>
<script src="/js/appredux.js"></script>
@section('scripts')
@show
</body>
</html>
