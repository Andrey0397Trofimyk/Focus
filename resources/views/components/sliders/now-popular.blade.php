<div class="{{ $class ?? '' }}  c-now-popular">
	<div class="c-now-popular__container container">
        <h2 class="c-now-popular__title ui-title">
            СЕЙЧАС ПОПУЛЯРНО
        </h2>
		<div class="swiper c-now-popular__slider js--now-popular-slider">
			<ul class="swiper-wrapper">
				@foreach($newsPopular as $popular)
					<li class="swiper-slide c-now-popular__slide">
                        @include('components.card.card-second', [
                            'class' => 'c-now-popular__card',
                            'news' => $popular
                        ])
					</li>
				@endforeach
			</ul>
		</div>
        <div class="c-now-popular__arrow ui-slider-arrow ui-slider-arrow--next js--now-popular-next"></div>
        <div class="c-now-popular__arrow ui-slider-arrow ui-slider-arrow--prev js--now-popular-prev"></div>
	</div>
</div>