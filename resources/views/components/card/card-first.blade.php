<article class="{{ $class ?? '' }} c-card-first">
    <div class="c-card-first__box">
        <a href="" class="c-card-first__link-img">
            <figure class="c-card-first__figure">
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
                        alt="news" 
                        width="293"
                        height="298"
                        decoding="async"
                        class="c-card-first__img lazyload"
                    >
                @endif
            </figure>
        </a>
        @include('components.link-category', [
            'class' => 'c-card-first__link-category',
            'text' =>  $news['category'] ?? ''
        ])
    </div>
    <div class="c-card-first__info ui-card-content">
        <a href="#" class="ui-info-content__link">
            <span class="ui-card-content__title">
                {{$news['text'] ?? ''}}
            </span>
        </a>
        @include('components.time', [
            'class' => 'ui-card-content__time'
        ])
    </div>
</article>