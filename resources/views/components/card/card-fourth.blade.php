<article class="c-card-fourth">
    <div class="c-card-fourth__inner">
        <a href="" class="c-card-fourth__link-img">
            <figure class="c-card-fourth__figure">
                <img 
                    data-srcset="
                        grafical/images/resize-50/{{ $news['img'] ?? '' }} 320w,
                        grafical/images/resize-75/{{ $news['img'] ?? '' }} 576w,
                        grafical/images/resize-90/{{ $news['img'] ?? '' }} 680w,"
                    data-sizes="
                        (max-width: 400px) 320px,
                        (max-width: 768px) 190px,
                        (max-width: 992px) 350px,
                        (max-width: 1300px) 210px,
                        300px
                    "
                    alt="news"
                    width="301"
                    height="148"
                    decoding="async" 
                    class="c-card-fourth__img lazyload">
            </figure>
        </a>
        @include('components.link-category', [
            'class' => 'c-card-fourth__link-category',
            'text' =>  $news['category'] ?? ''
        ])
    </div>
    <div class="c-card-fourth__info ui-card-content">
        <a 
            href=""
            class="ui-card-content__link">
            <span class="ui-card-content__title">
                {{ $news['text'] ?? '' }}
            </span>
        </a>
        @include('components.time', [
            'class' => 'ui-card-content__time'
        ])
    </div>
</article>