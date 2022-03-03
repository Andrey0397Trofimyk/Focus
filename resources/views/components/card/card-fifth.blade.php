<article class="c-card-fifth">
    @include('components.link-category', [
        'class' => 'c-card-fifth__link-category',
        'text' =>  $news['category'] ?? 'Технологии и наука'
    ])
    <div class="c-card-fifth__inner ui-card-content">
        <a href="" class="ui-card-content__link">
            <span class="ui-card-content__title">
                Все в масках и проверка температуры: в Украине стартовала основная сессия ВНО-2020
            </span>
            <span class="ui-card-content__text">
                Первый тест – по математике. Для его прохождения зарегистрировались 186 072 человека. 
            </span>
        </a>
        @include('components.time', [
            'class' => 'ui-card-content__time',
            'time' => $news['time'] ?? '16:51'
        ])
    </div>
</article>