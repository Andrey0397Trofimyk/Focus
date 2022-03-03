<article class="{{ $class ?? '' }}  c-card-third">
    <figure class="c-card-third__figure">
        @if(isset($news['img']))
            <img 
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
                alt="news"
                width="298"
                header="293"
                decoding="async"
                class="c-card-third__img lazyload">
        @endif
    </figure>
    <div class="c-card-third__inner">
        @include('components.link-category', [
            'class' => 'c-card-third__link-category c-link-category--white',
            'text' =>  $news['category'] ?? ''
        ])
        <a 
            href=""
            class="c-card-third__info">
            <span class="c-card-third__special-text">
                {{ $news['special-text'] ?? '' }}
            </span>
            <span class="c-card-third__text">
                {{ $news['text'] ?? '' }}
            </span>
        </a>
    </div>
</article>