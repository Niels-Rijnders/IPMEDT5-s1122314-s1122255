@extends('default')

@section('title')
 {{"All tijden"}}
@endsection

@section('content')
    <ul class="u-grid-12 u-grid-gap-2">
        <h2 class="gridCard__heading">Beschikbare tijden</h2><br>
        <button class="sushiCard__button " onclick="window.location.href='/sushi/create'">Tijd reserveren</button>
        @foreach($tijden as $tijd)
        <li class="" data-kind-of-sushi={{$tijd->time}}>
            <h2 class="gridCard__heading"> {{$tijd->time}} {{$tijd->telefoonnummer}} </h2>
        </li>
        @endforeach
    </ul>
@endsection