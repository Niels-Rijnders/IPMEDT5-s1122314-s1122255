@extends('default')

@section('title')
 {{"All tabel"}}
@endsection

@section('content')
@include('tabel.components.checkbox--index')
    <ul class="u-grid-12 u-grid-gap-2">
        @foreach($tabel as $tabel)
            @include('tabel.components.tabelCard--index')
        @endforeach
    </ul>
@endsection