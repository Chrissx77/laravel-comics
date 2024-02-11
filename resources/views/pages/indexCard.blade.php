@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')

<div>
    {{$catwoman['title']}}
</div>

<div>
    <img src={{$catwoman['thumb']}} alt="" srcset="">
</div>

<div>
    {{$catwoman['description']}}
</div>

<div>
    {{$catwoman['price']}}
</div>


@endsection
