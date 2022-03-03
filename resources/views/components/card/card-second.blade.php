<article class="{{ $class ?? '' }} c-card-second @if(isset($news['dark-mode'])) c-card-second--dark @endif">
    <figure class="c-card-second__figure @if(!isset($news['img'])) c-card-second__figure--no-img @endif">
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
                "
                alt="news"
                width="298"
                header="293"
                decoding="async"
                class="c-card-second__img lazyload">
        @endif
    </figure>
    <div class="c-card-second__inner ui-card-content ui-card-content--special">
        @php 
            if(isset($news['dark-mode'])) {
                $category = 'ui-card-content__link-category';
                $time = 'ui-info-content__time';
            }
            else {
                $category = 'ui-card-content__link-category c-link-category--white';
                $time = 'ui-info-content__time c-time--white';
            } 
        @endphp
        @include('components.link-category', [
            'class' => $category,
            'text' =>  $news['category'] ?? ''
        ])
        <a 
            href=""
            class="c-card-second__link ui-card-content__link">
            <span class="ui-card-content__title">
                {{ $news['text'] ?? '' }}
            </span>
        </a>
        @include('components.time', [
            'class' => $time,
            'time' => $news['time'] ?? '15:44',
        ])
    </div>
</article>