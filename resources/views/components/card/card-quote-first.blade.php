<article class="c-card-quote-first">
    <figure class="c-card-quote-first__figure @if(!isset($news['img'])) c-card-quote-first__figure--no-img @endif">
        @if(isset($news['img']))
            <img 
                src="grafical/icons/no-img.svg"
                data-srcset="
                    grafical/images/resize-50/{{ $news['img'] }} 320w,
                    grafical/images/resize-75/{{ $news['img'] }} 576w,
                    grafical/images/resize-90/{{ $news['img'] }} 680w,"
                data-sizes="
                    (max-width: 400px) 320px,
                    (max-width: 768px) 190px,
                    (max-width: 992px) 350px,
                    (max-width: 1300px) 210px,
                    300px
                " 
                width="300"
                height="220"
                alt="quote"
                decoding="async"
                class="c-card-quote-first__img lazyload"
            >
        @endif
    </figure>   
    <div class="c-card-quote-first__inner">
        <a href="" class="c-card-quote-first__category">
            {{ $news['category'] ?? '' }} 
        </a>
        <a href="" class="c-card-quote-first__symbol">
            <svg class="c-card-quote-first__icon">
        <use xlink:href="{{ mix('/grafical/icons/sprite.svg') }}#symbol"></use>
            </svg>
            <span class="c-card-quote-first__text">
                {{ $news['text'] ?? '' }} 
            </span>
        </a>
        <a href="" class="c-card-quote-first__author c-author">
            <figure class="c-author__figure @if(!isset($news['c-author-img'])) c-author__figure--no-img @endif">
                <img 
                    src="grafical/icons/no-img.svg"
                    data-srcset="
                        grafical/images/resize-50/{{ $news['author-img'] ?? '' }} 320w,
                        grafical/images/resize-90/{{ $news['author-img'] ?? '' }} 992w,"
                    alt="c-author"
                    height="30"
                    width="30"
                    decoding="async"
                    class="c-author__img lazyload"
                >
            </figure>
            <span class="c-author__text">
                {{ $news['author'] ?? '' }} 
            </span>
        </a>
    </div>
</article>