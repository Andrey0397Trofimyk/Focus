<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $newsListFirst = [
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Украина',
                'text' => 'Наказание карантином. Чем грозит Украине вторая волна борьбы с коронавирусом',
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Технологии и наука',
                'text' => 'Заговоренная связь. Все, что известно о 5G и его влиянии на здоровье',
            ],
            [
                'type-card' => 'card-third',
                'img' => '/grafical/images/new-2.png',
                'category' => 'рейтинг',
                'text' => 'Из песни слов не выкинешь. Рейтинг Фокуса: 
                самые успешные звезды шоу-бизнеса',
                'special-text' => '100',
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Технологии и наука',
                'text' => 'Дубы и сосны. В соцсетях обсуждают сексистский скандал в "Слуге народа"',
            ],
            [
                'type-card' => 'card-second',
                'img' => '/grafical/images/new-3.png',
                'category' => 'рейтинг',
                'text' => 'Заговоренная связь. Все, что известно о 5G и его влиянии на здоровье',
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-4.png',
                'category' => 'Технологии и наука',
                'text' => 'Кабмин назначил главой МОН Сергея Шкарлета в обход Рады',
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Технологии и наука',
                'text' => 'Агент изменений. Денис Малюська — о частных СИЗО, продаже тюрем и будущем люстрации',
            ],
            [
                'type-card' => 'card-second',
                'img' => '/grafical/images/new-3.png',
                'category' => 'рейтинг',
                'text' => 'Выход в люди. Как Шарий диктует информационную повестку дня в Украине',
            ]
        ];
        $newsListSecond = [
            [
                'type-card' => 'card-quote-second',
                'img' => '/grafical/images/quote-1.png',
                'category' => 'Технологии и наука',
                'text' => 'Агент изменений. Денис Малюська — о частных СИЗО, продаже тюрем и будущем люстрации',
                'special-block' => true
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Технологии и наука',
                'text' => 'Агент изменений. Денис Малюська — о частных СИЗО, продаже тюрем и будущем люстрации',
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Технологии и наука',
                'text' => 'Агент изменений. Денис Малюська — о частных СИЗО, продаже тюрем и будущем люстрации',
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Технологии и наука',
                'text' => 'Агент изменений. Денис Малюська — о частных СИЗО, продаже тюрем и будущем люстрации',
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Технологии и наука',
                'text' => 'Агент изменений. Денис Малюська — о частных СИЗО, продаже тюрем и будущем люстрации',
            ],
            [
                'type-card' => 'card-blurb',
                'img' => '/grafical/images/blurb-2.png'
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Технологии и наука',
                'text' => 'Агент изменений. Денис Малюська — о частных СИЗО, продаже тюрем и будущем люстрации',
            ],
        ];
        $newsListThird = [
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Украина',
                'text' => 'Наказание карантином. Чем грозит Украине вторая волна борьбы с коронавирусом',
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Украина',
                'text' => 'Небоскребы советских времен. Три маршрута к памятникам советского модернизма в Киеве',
            ],
            [
                'type-card' => 'card-third',
                'img' => '/grafical/images/new-2.png',
                'category' => 'рейтинг',
                'text' => 'Из песни слов не выкинешь. Рейтинг Фокуса: 
                самые успешные звезды шоу-бизнеса',
                'special-text' => '100',
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Украина',
                'text' => 'Как закалилась сталь. Музей Островского в Шепетовке — памятник архитектуры, а не идеологии',
            ],
        ];
        $newsListFourth = [
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Украина',
                'text' => 'Наказание карантином. Чем грозит Украине вторая волна борьбы с коронавирусом',
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Украина',
                'text' => 'Наказание карантином. Чем грозит Украине вторая волна борьбы с коронавирусом',
            ],
            [
                'type-card' => 'card-second',
                'img' => '/grafical/images/new-3.png',
                'category' => 'фото дня',
                'text' => 'Бизнес и немного удовольствия: Grand Hotel Lviv Luxury & SPA',
                'special-block' => true
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Украина',
                'text' => 'Наказание карантином. Чем грозит Украине вторая волна борьбы с коронавирусом',
            ],
            [
                'type-card' => 'card-quote-first',
                'category' => 'Мнение',
                'text' => '“Государство или смерть. Какой кризис станет для Украины последним”',
                'author-img' => '/grafical/images/author-1.png',
                'author' => 'Михаил Багинский'
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Украина',
                'text' => 'Наказание карантином. Чем грозит Украине вторая волна борьбы с коронавирусом',
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Украина',
                'text' => 'Наказание карантином. Чем грозит Украине вторая волна борьбы с коронавирусом',
            ],
        ];
        $newsListFifth = [
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Украина',
                'text' => 'Наказание карантином. Чем грозит Украине вторая волна борьбы с коронавирусом',
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Украина',
                'text' => 'Наказание карантином. Чем грозит Украине вторая волна борьбы с коронавирусом',
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-3.png',
                'category' => 'фото дня',
                'text' => 'Бизнес и немного удовольствия: Grand Hotel Lviv Luxury & SPA',
            ],
            [
                'type-card' => 'card-blurb',
                'img' => '/grafical/images/blurb-12.png',
                'category' => 'Украина',
                'text' => 'Наказание карантином. Чем грозит Украине вторая волна борьбы с коронавирусом',
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-3.png',
                'category' => 'фото дня',
                'text' => 'Бизнес и немного удовольствия: Grand Hotel Lviv Luxury & SPA',
            ],
            [
                'type-card' => 'card-blurb',
                'img' => '/grafical/images/blurb-13.png',
                'category' => 'Украина',
                'text' => 'Наказание карантином. Чем грозит Украине вторая волна борьбы с коронавирусом',
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Украина',
                'text' => 'Наказание карантином. Чем грозит Украине вторая волна борьбы с коронавирусом',
            ],
            [
                'type-card' => 'card-first',
                'img' => '/grafical/images/new-1.png',
                'category' => 'Украина',
                'text' => 'Наказание карантином. Чем грозит Украине вторая волна борьбы с коронавирусом',
            ],
        ];
        $newsRating = [
            [
                'type-card' => 'card-fourth',
                'img' => '/grafical/images/blurb-10.png',
                'special-text' => '100',
                'category' => 'Рейтинг',
                'subtitle' => 'Рейтинг 2019',
                'text' => 'Самые влиятельные украинцы'
            ],
            [
                'type-card' => 'card-fourth',
                'img' => '/grafical/images/blurb-11.png',
                'category' => 'Рейтинг',
                'text' => 'Бунт кнопок. 30 лучших работодателей Украины — рейтинг Фокуса',
                'dark-mode' => true
            ],
            [
                'type-card' => 'card-fourth',
                'special-text' => '100',
                'category' => 'Рейтинг',
                'text' => 'Бунт кнопок. 30 лучших работодателей Украины — рейтинг Фокуса',

            ]
        ];
        $newsPopular = [
            [
                'img' => '/grafical/images/new-8.png',
                'category' => 'протесты в США',
                'text' => 'Жертвы собственной пропаганды. Как либеральные могут проиграть холодную войну',
            ],
            [
                'category' => 'Мир',
                'text' => 'Австралиец выловил рекордного красного императора и решил передать его ученым',
            ],
            [
                'category' => 'Мир',
                'text' => 'Жизнь за 80. 5 самых пожилых рекорсменов из Книги рекордов Гиннеса',
                'dark-mode' => true
            ],
            [
                'img' => '/grafical/images/new-9.png',
                'category' => 'мир',
                'text' => 'Дресс-код постапокалипсиса. Как коронавирус и карантин навсегда изменили стиль',
            ],
            [
                'img' => '/grafical/images/new-9.png',
                'category' => 'мир',
                'text' => 'Дресс-код постапокалипсиса. Как коронавирус и карантин навсегда изменили стиль',
            ]
        ];
        return view('index', [
            'newsListFirst' => $newsListFirst,
            'newsListSecond' => $newsListSecond,
            'newsRating' => $newsRating,
            'newsPopular' => $newsPopular,
            'newsListThird' => $newsListThird,
            'newsListFourth' => $newsListFourth,
            'newsListFifth' => $newsListFifth]);
    }
}
