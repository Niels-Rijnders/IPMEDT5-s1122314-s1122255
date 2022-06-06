@extends('default')


@section('title')
Creeër tabel
@endsection

@section('content')
<article class="create-form a-popup">
    <form class="create-form__form" action="/tabel" method="POST">
        @csrf 

        <section class="create-form__section">
            <label for="telefoonnummer">telefoonnummer </label>
            <input class="create-form__input" name="telefoonnummer" id="telefoonnummer" type="number" />
        </section>

        <section class="create-form__section">
            <label for="kind">Tijdslot </label>
            <select class="create-form__input" id="time" name="time">
                <!--Deze site gebruikt de functie uit de tabel controller die alleen maar tijden meegeeft die niet 
                op 0 staan. daardoor zijn de enige tijden die je kan selecteren de tijden die nog beschikbaar zijn. -->
                @foreach($tijden as $tijd)
                    <option value={{$tijd->time}}> {{$tijd->time}} </option>
                @endforeach
            </select>
        </section>
        <section class="create-form__section">
            <button class="create-form__button type="submit">Plek reserveren</button>
        </section>
    </form>
    <button class="tabelCard__button " onclick="window.location.href='/tabel'">Terug naar de tabel</button>
</article>
@endsection