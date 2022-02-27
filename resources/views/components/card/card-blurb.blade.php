<div class="{{ $class ?? '' }} c-card-blurb">
    <a href="#" class="c-card-blurb__link">
        <figure class="c-card-blurb__figure">
            @if(isset($news['img']))
                <img 
                    src="{{ $news['img'] }}" 
                    alt="" 
                    class="c-card-blurb__img">
            @endif
        </figure>
    </a>
</div>