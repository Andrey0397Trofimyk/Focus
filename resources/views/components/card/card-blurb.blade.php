<div class="{{ $class ?? '' }} c-card-blurb">
    <a href="#" class="c-card-blurb__link">
        <figure class="c-card-blurb__figure">
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
                    alt="blurb" 
                    width="293"
                    height="298"
                    class="c-card-blurb__img lazyload">
            @endif
        </figure>
    </a>
</div>