@extends('layouts.user.application')

@section('metadata')
@stop

@section('styles')
@parent
<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<style>
    html, body {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        width: 100%;
        display: table;
        font-weight: 100;
        font-family: 'Lato';
    }

    .container {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
    }

    .content {
        text-align: center;
        display: inline-block;
    }

    .title {
        font-size: 96px;
    }
</style>
@stop

@section('title')
@stop

@section('scripts')
@parent
@stop

@section('content')

<div class="container">
    <p class="content"></p>
        <div>Laravel Boilerplate User page</div>
        <p><a href="https://github.com/takaaki-mizuno/laravel-boilerplate/">GitHub</a></p>
    <example></example>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!-- let people make clients -->
            <passport-clients></passport-clients>

            <!-- list of clients people have authorized to access our account -->
            <passport-authorized-clients></passport-authorized-clients>

            <!-- make it simple to generate a token right in the UI to play with -->
            <passport-personal-access-tokens></passport-personal-access-tokens>
        </div>
    </div>
</div>
@stop
