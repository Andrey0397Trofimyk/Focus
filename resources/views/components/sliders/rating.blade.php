<div class="{{ $class ?? '' }}  c-rating">
	<div class="c-rating__container container">
        <h2 class="c-rating__title ui-title">
            Рейтинги
        </h2>
		<div class="swiper c-rating__slider js--rating-slider">
			<div class="swiper-wrapper">
				@foreach($newsRating as $rating)
					<div class="swiper-slide c-rating__slide">
						<article class="c-rating__box @if(isset($rating['dark-mode'])) c-rating__box--black @endif">
							<figure class="c-rating__figure 
                                @if($loop->first) c-rating__figure--shadow @endif
                                @if(empty($rating['img'])) c-rating__figure--no-img @endif
                                ">
                                @if(isset($rating['img']))
								<img 
                                    src="grafical/icons/no-img.svg"
                                    data-srcset="
                                        grafical/images/resize-50/{{ $rating['img'] }} 320w,
                                        grafical/images/resize-75/{{ $rating['img'] }} 576w,
                                        grafical/images/resize-90/{{ $rating['img'] }} 680w,"
                                    data-sizes="
                                        (max-width: 400px) 320px,
                                        (max-width: 768px) 190px,
                                        (max-width: 992px) 350px,
                                        (max-width: 1300px) 210px,
                                        300px
                                    " 
									alt=""
									class="c-rating__img lazyload">
                                @endif
							</figure>
                            <a 
                                href=""
                                class="c-rating__info">
                                <span class="c-rating__category">
                                    {{ $rating['category'] ?? '' }}
                                </span>
                                <span class="c-rating__special-text">
                                    {{ $rating['special-text'] ?? '' }}
                                </span>
                                @if(!empty($rating['subtitle']))
                                    <span class="c-rating__subtitle">
                                        {{ $rating['subtitle'] ?? '' }}
                                    </span>
                                @endif
                                <span class="c-rating__text">
                                    {{ $rating['text'] ?? '' }}
                                </span>
                            </a>
						</article>
					</div>
				@endforeach
			</div>
		</div>
        <div class="c-rating__arrow ui-slider-arrow ui-slider-arrow--next js--rating-next"></div>
        <div class="c-rating__arrow ui-slider-arrow ui-slider-arrow--prev js--rating-prev"></div>
	</div>
</div>