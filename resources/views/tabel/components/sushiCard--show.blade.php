<article class="tabelCard a-popup">
    <figure class="tabelCard__figure">
        <img class="tabelCard__image" src={{$tabel->image}} alt={{$tabel->name . " " . $tabel->kind}} />
    </figure>
    <section class="tabelCard__text">
        <p>{{$tabel->description}}</p>
    </section>
    <section class="tabelCard__btnSection">
        <button class="tabelCard__button">   Order now  </button>
        <a class="tabelCard__back__to__home" href="/tabel"> Back to home </a>
    </section>
</article>