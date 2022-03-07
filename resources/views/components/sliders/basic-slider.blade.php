<div class="{{ $class ?? '' }}  c-basic-slider">
	<div class="c-basic-slider__container container">
		<div class="swiper js--thumbs-basic-slider c-basic-slider__thumbs c-thumbs-slider">
				<div class="swiper-wrapper c-thumbs-slider__wrapper">
					@php
						$thumbs = [
							1 => 'Леди в законе. Особый статус для жены президетна',
							2 => 'Взрыв на Позняках в Киеве',
							3 => 'Потоп на западной Украине',
							4 =>'Цифровая трансформация бизнеса Украины'
							]
					@endphp
					@for($i = 1; $i <= 4; $i++)
						<div class="swiper-slide c-thumbs-slider__slide">
							<figure class="c-thumbs-slider__figure">
								<img 
									src="grafical/icons/no-img.svg"
									alt="thumbs"
									width="250"
									height="40"
									srcset="
										grafical/images/resize-50/thumbs-{{ $i }}.webp 768w,
										grafical/images/resize-75/thumbs-{{ $i }}.webp 1200w,
										grafical/images/resize-90/thumbs-{{ $i }}.webp 1560w,"
									class="c-thumbs-slider__img"
									decoding="async">
							</figure>
							<span class="c-thumbs-slider__title">
								{{ $thumbs[$i] }}
							</span>
						</div>
					@endfor
				</div>
		</div>
		<div class="swiper js--basic-slider c-basic-slider__basic c-basic-slider">
			<div class="swiper-wrapper">
				@for($i = 1; $i <= 4; $i++)
					<div class="swiper-slide c-basic-slider__slide">
						<div class="c-basic-slider__box">
							<picture class="c-basic-slider__picture">
								@if($i == 1)
									<source srcset="grafical/images/resize-90/slider-{{ $i }}.webp" media="(min-width: 992px)" type="image/webp">
									<source srcset="grafical/images/resize-75/slider-{{ $i }}.webp" media="(min-width: 768px)" type="image/webp">
									<source srcset="grafical/images/resize-50/slider-{{ $i }}.webp" media="(min-width: 320px)" type="image/webp">
									<img 
										src="grafical/icons/no-img.svg"
										width="310"
										header="250"
										alt="slider"
										decoding="async"
										class="c-basic-slider__img">
								@else
									<source data-srcset="grafical/images/resize-90/slider-{{ $i }}.webp" media="(min-width: 992px)">
									<source data-srcset="grafical/images/resize-75/slider-{{ $i }}.webp" media="(min-width: 768px)">
									<source data-srcset="grafical/images/resize-50/slider-{{ $i }}.webp" media="(min-width: 320px)">
									<img 
										data-src="grafical/icons/no-img.svg"
										width="310"
										header="250"
										alt="slider"
										decoding="async"
										class="c-basic-slider__img swiper-lazy">
								@endif
							</picture>
							<div class="c-basic-slider__inner">
								@include('components.link-category', [
									'class' => 'c-basic-slider__link-category c-link-category--white',
									'text' =>  'Політика'
								])
								<a 
									href=""
									class="c-basic-slider__link">
									@if($i == 1)
										<h1 class="c-basic-slider__title">
											Леди в законе. Зачем Зеленскому понадобился особый статус для жены президента
										</h1>
									@else
										<h2 class="c-basic-slider__title">
											Леди в законе. Зачем Зеленскому понадобился особый статус для жены президента
										</h2>
									@endif
									<span class="c-basic-slider__text">
										Владимир Зеленский загорелся идеей разработки закона о первой леди. Для чего ему это понадобилось, и какие права и обязанности возлагаются на супругу главы государства в Украине 
									</span>
								</a>
							</div>
						</div>
					</div>
				@endfor
			</div>
		</div>
	</div>
</div>