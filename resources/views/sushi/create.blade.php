@extends('default')


@section('title')
Creeër Sushi
@endsection

@section('content')
<article class="create-form a-popup">
    <form class="create-form__form" action="/sushi" method="POST">
        @csrf 

        <section class="create-form__section">
            <label for="telefoonnummer">telefoonnummer </label>
            <input class="create-form__input" name="telefoonnummer" id="telefoonnummer" type="number" />
        </section>

        <section class="create-form__section">
            <label for="kind">Tijdslot </label>
            <select class="create-form__input" id="time" name="time">
                @foreach($tijden as $tijd)
                    <option value={{$tijd->time}}> {{$tijd->time}} </option>
                @endforeach
            </select>
        </section>
        <section class="create-form__section">
            <button class="create-form__button type="submit">Sushi aanmaken</button>
        </section>
    </form>
    <button class="sushiCard__button " onclick="window.location.href='/tabel'">Terug naar de tabel</button>
</article>
@endsection