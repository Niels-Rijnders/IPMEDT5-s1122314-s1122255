@extends('default')

@section('title')
 {{"All tijden"}}
@endsection

@section('content')
    <ul class="u-grid-12 u-grid-gap-2">
        <h2 class="gridCard__heading">Beschikbare tijden</h2><br>
        <button class="tabelCard__button " onclick="window.location.href='/tabel/create'">Tijd reserveren</button>
        <br>
        <li class="u-grid-12"></li>
        <li class="u-grid-12"></li>
        <li class="u-grid-12"></li>
        <li class="u-grid-12"></li>
        <li class="u-grid-12"></li>
        <li class="u-grid-12"></li>
        <li class="u-grid-12"></li>
        @foreach($tijden as $tijd)
        <br>
        <li class="u-grid-12 tabel" data-kind-of-tabel={{$tijd->time}}>
            <h2 class="gridCard__heading"> {{$tijd->time}} {{$tijd->telefoonnummer}} </h2>
        </li>
        @endforeach
    </ul>
@endsection