<div class="{{ $class ?? '' }}  c-blurb-first">
    <div class="c-blurb-first__container container">
        <ul class="c-blurb-first__list">
            @for($i = 1; $i <= 5; $i++)
                <li class="c-blurb-first__item">
                    <a 
                        href=""
                        class="c-blurb-first__link">
                        <figure 
                            class="c-blurb-first__figure @if($i % 2 == 0) c-blurb-first__figure--special @endif">
                            <img 
                                src="grafical/icons/no-img.svg"
                                data-srcset="
                                    grafical/images/resize-50/blurb-{{ $i }}.webp 1x,
                                    grafical/images/resize-75/blurb-{{ $i }}.webp 2x,
                                    grafical/images/resize-90/blurb-{{ $i }}.webp 3x"
                                alt="blurb"
                                width="85"
                                height="85"
                                decoding="async"
                                class="c-blurb-first__img lazyload"
                                >
                        </figure>
                    </a>
                </li>
            @endfor
        </ul>
        <span class="c-blurb-first__text">
            Подпишись с другом!
            <span>-10% каждому</span>
        </span>
        @include('components.button', [
            'class' => 'c-blurb-first__button'    
        ])
    </div>
</div>