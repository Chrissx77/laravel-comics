@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div class="container">
        @foreach ($comics as $comic)
            <div class="card">
                <img src={{ $comic['thumb'] }} alt="" srcset="">
                <small>{{ $comic['title'] }}</small>
            </div>
        @endforeach
    </div>
@endsection
