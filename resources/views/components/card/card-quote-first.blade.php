<article class="c-card-quote-first">
    <figure class="c-card-quote-first__figure @if(!isset($news['img'])) c-card-quote-first__figure--no-img @endif">
        @if(isset($news['img']))
            <img 
                src={{ $news['img'] }} 
                width="300"
                height="220"
                alt=""
            >
        @endif
    </figure>   
    <div class="c-card-quote-first__inner">
        <a href="" class="c-card-quote-first__category">
            {{ $news['category'] ?? '' }} 
        </a>
        <a href="" class="c-card-quote-first__symbol">
            <svg class="c-card-quote-first__icon">
                <use xlink:href="/grafical/icons/sprite.svg#symbol"></use>
            </svg>
            <span class="c-card-quote-first__text">
                {{ $news['text'] ?? '' }} 
            </span>
        </a>
        <a href="" class="c-card-quote-first__author c-author">
            <figure class="c-author__figure @if(!isset($news['c-author-img'])) c-author__figure--no-img @endif">
                <img 
                    src={{ $news['author-img'] ?? '' }} 
                    alt="c-author"
                    height="30"
                    width="30"
                    class="c-author__img"
                >
            </figure>
            <span class="c-author__text">
                {{ $news['author'] ?? '' }} 
            </span>
        </a>
    </div>
</article>