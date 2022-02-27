<div class="{{ $class ?? '' }} c-card-second @if(isset($news['dark-mode'])) c-card-second--dark @endif">
    <figure class="c-card-second__figure @if(!isset($news['img'])) c-card-second__figure--no-img @endif">
        @if(isset($news['img']))
            <img 
                src={{ $news['img'] }} 
                alt=""
                width="298"
                header="293"
                class="c-card-second__img">
        @endif
    </figure>
    <div class="c-card-second__inner">
        @php 
            if(isset($news['dark-mode'])) {
                $category = 'c-card-second__link-category';
                $time = 'c-card-second__time';
            }
            else {
                $category = 'c-card-second__link-category c-link-category--white';
                $time = 'c-card-second__time c-time--white';
            } 
        @endphp
        @include('components.link-category', [
            'class' => $category,
            'text' =>  $news['category'] ?? ''
        ])
        <a 
            href=""
            class="c-card-second__info">
            <span class="c-card-second__text">
                {{ $news['text'] ?? '' }}
            </span>
        </a>
        @include('components.time', [
            'class' => $time
        ])
    </div>
</div>