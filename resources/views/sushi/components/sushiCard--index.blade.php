<li class="a-popup u-list-style-none gridCard" data-kind-of-sushi={{$sushi->kind}}>
    <a href="/sushi/{{$sushi->id}}">
        <article class="">
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading"> {{$sushi->kind}} {{$sushi->name}} </h2>
            </header>
            <figure class="gridCard__figure">
                <img class="gridCard__image" src={{$sushi->image}} alt={{$sushi->name . " " . $sushi->kind}} />
            </figure>
            <section class="gridCard__textSection u-flex-v-center">
                <p class="gridCard__text">{{$sushi->description}}</p>
            </section>
        </article>
    </a>
</li>