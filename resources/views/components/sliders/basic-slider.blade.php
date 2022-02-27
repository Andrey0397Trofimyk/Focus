<div class="{{ $class ?? '' }}  c-basic-slider">
	<div class="c-basic-slider__container container">

		<div class="swiper js--thumbs-basic-slider c-basic-slider__thumbs c-thumbs-slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide c-thumbs-slider__slide">
						<figure class="c-thumbs-slider__figure">
							<img 
								src="grafical/images/new-5.png" 
								alt=""
								class="c-thumbs-slider__img">
						</figure>
						<span class="c-thumbs-slider__title">
							Леди в законе. Особый статус для жены президетна
						</span>
					</div>
					<div class="swiper-slide c-thumbs-slider__slide">
						<figure class="c-thumbs-slider__figure">
							<img 
								src="grafical/images/new-5.png" 
								alt=""
								class="c-thumbs-slider__img">
						</figure>
						<span class="c-thumbs-slider__title">
							Взрыв на Позняках в Киеве
						</span>
					</div>
					<div class="swiper-slide c-thumbs-slider__slide">
						<figure class="c-thumbs-slider__figure">
							<img 
								src="grafical/images/new-5.png" 
								alt=""
								class="c-thumbs-slider__img">
						</figure>
						<span class="c-thumbs-slider__title">
							Потоп на западной Украине
						</span>
					</div>
					<div class="swiper-slide c-thumbs-slider__slide">
						<figure class="c-thumbs-slider__figure">
							<img 
								src="grafical/images/new-5.png" 
								alt=""
								class="c-thumbs-slider__img">
						</figure>
						<span class="c-thumbs-slider__title">
							Цифровая трансформация бизнеса Украины
						</span>
					</div>
				</div>
		</div>
		<div class="swiper js--basic-slider c-basic-slider__basic c-basic-slider">
			<div class="swiper-wrapper">
				@for($i = 0; $i < 4; $i++)
					<div class="swiper-slide c-basic-slider__slide">
						<div class="c-basic-slider__box">
							<figure class="c-basic-slider__figure">
								<img 
									src="grafical/images/new-5.png" 
									alt=""
									class="c-basic-slider__img">
							</figure>
							<div class="c-basic-slider__inner">
								@include('components.link-category', [
									'class' => 'c-basic-slider__link-category c-link-category--white',
									'text' =>  'Політика'
								])
								<a 
									href=""
									class="c-basic-slider__link">
									<h1 class="c-basic-slider__title">
										Леди в законе. Зачем Зеленскому понадобился особый статус для жены президента
									</h1>
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