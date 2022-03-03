<article class="c-card-quote-second">
    <figure class="c-card-quote-second__figure">
        @if(isset($news['img']))
            <img 
                src="grafical/icons/no-img.svg"
                data-srcset="
                    grafical/images/resize-50/{{ $news['img'] }} 320w,
                    grafical/images/resize-75/{{ $news['img'] }} 576w,
                    grafical/images/resize-90/{{ $news['img'] }} 680w,"
                data-sizes="
                    (max-width: 678px) 235px,
                    (max-width: 768px) 310px,
                    (max-width: 992px) 320px,
                    (max-width: 1200px) 350px,
                    465px
                " 
                alt="quote"
                width="150"
                height="210"
                decoding="async"
                class="c-card-quote-second__img lazyload">
        @endif
    </figure>
    <a href="" class="c-card-quote-second__link">
        <span class="c-card-quote-second__title">
            Как Юлия Тимошенко меня в Египет отправила
        </span>
        <span class="c-card-quote-second__text">
            В середине нулевых Киев переживал немыслимый ипотечный бум. Банки выдавали кредиты на десять и двадцать лет. 
        </span>
    </a>
    <span class="c-card-quote-second__link c-card-quote-second__link--author c-person">
        <a href="" class="c-person__name">
            Алексей Газубей
        </a>
        <span class="c-person__job">
            <span>Главний редактор</span> 
            <a href="">focus.ua</a>
        </span>
    </span>
</article>