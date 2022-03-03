<div class="{{ $class ?? '' }} c-short-news">
    <div class="c-short-news__container container">
        <div class="c-short-news__inner">
            <a href="#" class="c-short-news__title">
                Потоп на западной Украине
            </a>
            <ul class="c-short-news__list">
                @for($i = 0; $i < 5; $i++)
                    @if($i == 0)
                        <li class="c-short-news__item">
                            <a 
                                href="" 
                                class="c-short-news__link c-short-news__link--first">
                                Появилось видео затопленного Галича с воздуха
                                @include('components.time', [
                                    'class' => 'c-short-news__time'
                                ])
                            </a>
                        </li>
                    @endif
                    <li class="c-short-news__item">
                        <a 
                            href="" 
                            class="c-short-news__link">
                            Ущерб от наводнения на Закарпатье оценили в 125 млн гривен
                            @include('components.time', [
                                'class' => 'c-short-news__time'
                            ])
                        </a>
                    </li>
                @endfor
            </ul>
            <a 
                href=""
                class="c-short-news__basic-link">
                смотреть все материалы
            </a>
            <div class="c-short-news__figure">
                <img 
                    src="grafical/icons/no-img.svg"
                    data-srcset="
                        grafical/images/resize-50/new-6.webp 576w,
                        grafical/images/resize-75/new-6.webp 1200w,
                        grafical/images/resize-90/new-6.webp 1560w,"
                    alt="news"
                    width="320"
                    height="350"
                    decoding="async" 
                    class="c-short-news__img lazyload">
            </div>
        </div>
    </div>
</div>