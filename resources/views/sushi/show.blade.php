@extends('default')

@section('title')
    {{$sushi->kind . " " . $sushi->name}}
@endsection

@section('content')
    @include('sushi.components.sushiCard--show')
@endsection