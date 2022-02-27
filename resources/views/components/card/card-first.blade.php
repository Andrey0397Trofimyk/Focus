<div class="{{ $class ?? '' }} c-card-first">
    <div class="c-card-first__box">
        <a href="" class="c-card-first__link-img">
            <figure class="c-card-first__figure">
                @if(isset($news['img']))
                    <img 
                        src="{{ $news['img'] }}" 
                        alt="news" 
                        height="257"
                        width="32"
                        class="c-card-first__img"
                    >
                @endif
            </figure>
        </a>
        @include('components.link-category', [
            'class' => 'c-card-first__link-category',
            'text' =>  $news['category'] ?? ''
        ])
    </div>
    <div class="c-card-first__info c-info-content">
        <a href="#" class="c-info-content__link">
            {{$news['text'] ?? ''}}
        </a>
        @include('components.time', [
            'class' => 'c-card-second__time'
        ])
    </div>
</div>