<div class="{{ $class ?? '' }}  c-news-slider">
	<div class="c-news-slider__container container">
		<div class="swiper c-news-slider__slider js--news-slider">
			<div class="swiper-wrapper">
				@for($i = 0; $i < 2; $i++)
					<div class="swiper-slide c-news-slider__slide">
						<article class="c-news-slider__box">
							<figure class="c-news-slider__figure">
								<img 
									src="grafical/icons/no-img.svg"
									data-srcset="
										grafical/images/resize-50/blurb-9.webp 576w,
										grafical/images/resize-75/blurb-9.webp 1200w,
										grafical/images/resize-90/blurb-9.webp 1560w," 
									alt="blurb"
									width="320"
									height="400"
									decoding="async"
									class="c-news-slider__img lazyload">
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
						</article>
					</div>
				@endfor
			</div>
			<div class="c-news-slider__arrow  ui-slider-arrow ui-slider-arrow--inside ui-slider-arrow--next js--new-slider-next">
				<span class="ui-slider-arrow__line"></span>
			</div>
			<div class="c-news-slider__arrow  ui-slider-arrow ui-slider-arrow--inside ui-slider-arrow--prev js--new-slider-prev">
				<span class="ui-slider-arrow__line"></span>
			</div>
		</div>
	</div>
</div>