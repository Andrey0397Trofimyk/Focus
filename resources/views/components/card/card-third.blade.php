<div class="{{ $class ?? '' }}  c-card-third">
    <figure class="c-card-third__figure">
        @if(isset($news['img']))
            <img 
                src={{ $news['img'] }} 
                alt=""
                width="298"
                header="293"
                class="c-card-third__img">
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
</div>