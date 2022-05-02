@extends('default')

@section('title')
    {{$tabel->kind . " " . $tabel->name}}
@endsection

@section('content')
    @include('tabel.components.tabelCard--show')
@endsection