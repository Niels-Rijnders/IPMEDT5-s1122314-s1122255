@extends('default')

@section('title')
 {{"All tijden"}}
@endsection

@section('content')
    <ul class="u-grid-12 u-grid-gap-2">
        <h1 class="gridCard__heading">Beschikbare tijden</h1><br>
        <button class="tabelCard__button " onclick="window.location.href='/tabel/create'"><u>Tijd reserveren</u></button>
        <button class="tabelCard__button " onclick="ochtendButton()" id="ochtend"><u>Ochtend</u></button>
        <button class="tabelCard__button " onclick="middagButton()" id="middag"><u>Middag</u></button>
        <button class="tabelCard__button " onclick="namiddagButton()" id="namiddag"><u>Na-middag</u></button>
        <button class="tabelCard__button " onclick="allesButton()" id="alles"><u>Alle tijden</u></button>
        <br>
        <li class="u-grid-12"></li>
        <li class="u-grid-12"></li>
        <li class="u-grid-12"></li>
        <li class="u-grid-12"></li>
        <li class="u-grid-12"></li>
        <li class="u-grid-12"></li>
        <li class="u-grid-12"></li>
        @foreach($tijden as $tijd)
        <li class="u-grid-12 tabel" id="{{$tijd->time}}" data-kind-of-tabel={{$tijd->time}} href>
        <h2 class="gridCard__heading" > {{$tijd->time}} </h2>
        </li>
        <div class="role" id="telefoonnummer">{{$tijd->telefoonnummer}}</div>
        @endforeach
    </ul>
@endsection