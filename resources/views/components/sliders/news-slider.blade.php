<div class="{{ $class ?? '' }}  c-news-slider">
	<div class="c-news-slider__container container">
		<div class="swiper c-news-slider__slider js--news-slider">
			<div class="swiper-wrapper">
				@for($i = 0; $i < 2; $i++)
					<div class="swiper-slide c-news-slider__slide">
						<div class="c-news-slider__box">
							<figure class="c-news-slider__figure">
								<img 
									src="grafical/images/blurb-9.png" 
									alt=""
									class="c-news-slider__img">
							</figure>
							@include('components.link-category', [
								'class' => 'c-news-slider__link-category c-link-category--white',
								'text' =>  'длинный фокус'
							])
							<a 
								href=""
								class="c-news-slider__link">
								<h2 class="c-news-slider__title">
									Ни тоски, ни жалости
								</h2>
								<span class="c-news-slider__text">
									Почему украинки участвуют в боях без правил
								</span>
							</a>
						</div>
					</div>
				@endfor
			</div>
			<div class="c-news-slider__arrow  ui-slider-arrow ui-slider-arrow--inside ui-slider-arrow__arrow--next js--new-slider-next"></div>
			<div class="c-news-slider__arrow  ui-slider-arrow ui-slider-arrow--inside ui-slider-arrow__arrow--prev js--new-slider-prev"></div>
		</div>
	</div>
</div>