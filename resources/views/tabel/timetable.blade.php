@extends('default')

@section('title')
 {{"All tijden"}}
@endsection

@section('content')
    <ul class="u-grid-12 u-grid-gap-2">
        <h1 class="gridCard__heading">Beschikbare tijden</h1><br>
        <button class="tabelCard__button " onclick="window.location.href='/tabel/create'">Tijd reserveren</button>
        <button class="tabelCard__button " onclick="ochtendButton()" id="ochtend">Ochtend</button>
        <button class="tabelCard__button " onclick="middagButton()" id="middag">Middag</button>
        <button class="tabelCard__button " onclick="namiddagButton()" id="namiddag">Na-middag</button>
        <button class="tabelCard__button " onclick="allesButton()" id="alles">Alle tijden</button>
        <br>
        <!--omdat de tabel met een grid is gemaakt zijn deze hier zodat het grid mooi op de pagina staat -->
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
        <!--deze div is ervoor zodat we met de javascript kunnen checken of deze plek bezet is of niet
        deze div word ook direct op style none gezet door javascript zodat de telefoonnummers niet op de 
        site verschijnen -->
        <div class="role" id="telefoonnummer">{{$tijd->telefoonnummer}}</div>
        @endforeach
    </ul>
@endsection