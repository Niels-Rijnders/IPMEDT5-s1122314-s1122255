<li class="a-popup u-list-style-none gridCard" data-kind-of-tabel={{$tabel->kind}}>
    <a href="/tabel/{{$tabel->id}}">
        <article class="">
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading"> {{$tabel->kind}} {{$tabel->name}} </h2>
            </header>
            <figure class="gridCard__figure">
                <img class="gridCard__image" src={{$tabel->image}} alt={{$tabel->name . " " . $tabel->kind}} />
            </figure>
            <section class="gridCard__textSection u-flex-v-center">
                <p class="gridCard__text">{{$tabel->description}}</p>
            </section>
        </article>
    </a>
</li>