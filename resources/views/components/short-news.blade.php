<div class="{{ $class ?? '' }} c-short-news">
    <div class="c-short-news__container container">
        <div class="c-short-news__inner">
            <h2 class="c-short-news__title">
                Потоп на западной Украине
            </h2>
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
                    src="grafical/images/new-6.png" 
                    alt="" 
                    class="c-short-news__img">
            </div>
        </div>
    </div>
</div>