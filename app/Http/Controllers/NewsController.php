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
                'img' => 'new-1.webp',
                'category' => 'Украина',
                'text' => 'Наказание карантином. Чем грозит Украине вторая волна борьбы с коронавирусом',
            ],
            [
                'type-card' => 'card-first',
                'img' => 'new-11.webp',
                'category' => 'Технологии и наука',
                'text' => 'Заговоренная связь. Все, что известно о 5G и его влиянии на здоровье',
            ],
            [
                'type-card' => 'card-third',
                'img' => 'new-2.webp',
                'category' => 'рейтинг',
                'text' => 'Из песни слов не выкинешь. Рейтинг Фокуса: 
                самые успешные звезды шоу-бизнеса',
                'special-text' => '100',
            ],
            [
                'type-card' => 'card-first',
                'img' => 'new-13.webp',
                'category' => 'Политика',
                'text' => 'Дубы и сосны. В соцсетях обсуждают сексистский скандал в "Слуге народа"',
            ],
            [
                'type-card' => 'card-second',
                'img' => 'new-3.webp',
                'category' => 'Технологии и наука',
                'text' => 'Заговоренная связь. Все, что известно о 5G и его влиянии на здоровье',
            ],
            [
                'type-card' => 'card-fourth',
                'img' => 'new-4.webp',
                'category' => 'политика',
                'text' => 'Кабмин назначил главой МОН Сергея Шкарлета в обход Рады',
            ],
            [
                'type-card' => 'card-fourth',
                'img' => 'new-14.webp',
                'category' => 'Технологии и наука',
                'text' => 'Агент изменений. Денис Малюська — о частных СИЗО, продаже тюрем и будущем люстрации',
            ],
            [
                'type-card' => 'card-second',
                'img' => 'new-15.webp',
                'category' => 'Политика',
                'text' => 'Выход в люди. Как Шарий диктует информационную повестку дня в Украине',
            ]
        ];
        $newsListSecond = [
            [
                'type-card' => 'card-quote-second',
                'img' => 'quote-1.webp',
                'category' => 'Технологии и наука',
                'text' => 'Агент изменений. Денис Малюська — о частных СИЗО, продаже тюрем и будущем люстрации',
                'special-block' => true
            ],
            [
                'type-card' => 'card-first',
                'img' => 'new-15.webp',
                'category' => 'Технологии и наука',
                'text' => 'Счастье за 16 секунд. В чем секрет популярности TikTok и как соцсеть влияет на психику подростков',
            ],
            [
                'type-card' => 'card-quote-first',
                'category' => 'Мнение',
                'text' => '“Too much против me too. Почему сексистские скандалы в Украине ничем не заканчиваются”',
                'author-img' => 'author-1.webp',
                'author' => 'Михаил Багинский'
            ],
            [
                'type-card' => 'card-fourth',
                'img' => 'new-16.webp',
                'category' => 'Технологии и наука',
                'text' => 'Новая нефть. Как ученые ищут редкие элементы на дне океана, в космосе и мусоре',
            ],
            [
                'type-card' => 'card-fifth',
                'category' => 'Технологии и наука',
                'text' => 'Агент изменений. Денис Малюська — о частных СИЗО, продаже тюрем и будущем люстрации',
            ],
            [
                'type-card' => 'card-blurb',
                'img' => 'blurb-6.webp'
            ],
            [
                'type-card' => 'card-fourth',
                'img' => 'new-17.webp',
                'category' => 'Культура',
                'text' => 'Обзор Юрия Володарского: 5 книг для тех, кто предпочитает "короткий метр" в литературе',
            ],
        ];
        $newsListThird = [
            [
                'type-card' => 'card-first',
                'img' => 'new-23.webp',
                'category' => 'Украина',
                'text' => 'Наказание карантином. Чем грозит Украине вторая волна борьбы с коронавирусом',
            ],
            [
                'type-card' => 'card-first',
                'img' => 'new-24.webp',
                'category' => 'Украина',
                'text' => 'Небоскребы советских времен. Три маршрута к памятникам советского модернизма в Киеве',
            ],
            [
                'type-card' => 'card-third',
                'img' => 'new-2.webp',
                'category' => 'рейтинг',
                'text' => 'Из песни слов не выкинешь. Рейтинг Фокуса: 
                самые успешные звезды шоу-бизнеса',
                'special-text' => '100',
            ],
            [
                'type-card' => 'card-first',
                'img' => 'new-25.webp',
                'category' => 'Украина',
                'text' => 'Как закалилась сталь. Музей Островского в Шепетовке — памятник архитектуры, а не идеологии',
            ],
        ];
        $newsListFourth = [
            [
                'type-card' => 'card-first',
                'img' => 'new-18.webp',
                'category' => 'Украина',
                'text' => 'Проверка доверия: владелец «Три Н» Максим Криппа о махинациях в благотворительности',
            ],
            [
                'type-card' => 'card-first',
                'img' => 'new-19.webp',
                'category' => 'Украина',
                'text' => 'Выход из карантина: Кабмин разрешил открыть кинотеатры со 2 июля',
            ],
            [
                'type-card' => 'card-second',
                'img' => 'new-10.webp',
                'category' => 'фото дня',
                'text' => 'Бизнес и немного удовольствия: Grand Hotel Lviv Luxury & SPA',
                'special-block' => true
            ],
            [
                'type-card' => 'card-first',
                'img' => 'new-20.webp',
                'category' => 'Украина',
                'text' => 'Пора домой. Истории мигрантов, которые вернулись в Украину из 
                ОАЭ, Китая и Польши',
            ],
            [
                'type-card' => 'card-quote-first',
                'category' => 'Мнение',
                'text' => '“Государство или смерть. Какой кризис станет для Украины последним”',
                'author-img' => 'author-1.webp',
                'author' => 'Михаил Багинский'
            ],
            [
                'type-card' => 'card-first',
                'img' => 'new-21.webp',
                'category' => 'Украина',
                'text' => 'Бетонная пята. Как застройщики превращают украинские города в ад',
            ],
            [
                'type-card' => 'card-first',
                'img' => 'new-22.webp',
                'category' => 'Украина',
                'text' => 'Смерть марафонца. Можно ли было спасти Екатерину Катющеву',
            ],
        ];
        $newsListFifth = [
            [
                'type-card' => 'card-fourth',
                'img' => 'new-26.webp',
                'category' => 'спорт',
                'text' => 'Финал Кубка Украины по футболу перенесут из Львова в Харьков, – СМИ',
            ],
            [
                'type-card' => 'card-fifth',
                'category' => 'Коронавирус в Украине',
                'text' => 'Коронавирус перевел всех в осадное положение. Пока концертные залы пусты, выступления проходят в режиме онлайн или не проходят вообще.',
                'time' => '14 июня 2020 о 16:51'
            ],
            [
                'type-card' => 'card-fourth',
                'img' => 'new-17.webp',
                'category' => 'Культура',
                'text' => 'Обзор Юрия Володарского: 5 книг для тех, кто предпочитает "короткий метр" в литературе',
            ],
            [
                'type-card' => 'card-blurb',
                'img' => 'blurb-12.webp',
            ],
            [
                'type-card' => 'card-fourth',
                'img' => 'new-27.webp',
                'category' => 'авто',
                'text' => 'Вдохновленные ностальгией. 3 лимитированные серии автомобилей, посвященные славному прошлому',
            ],
            [
                'type-card' => 'card-blurb',
                'img' => 'blurb-13.webp',
            ],
            [
                'type-card' => 'card-second',
                'img' => 'new-28.webp',
                'category' => 'Длинный фокус',
                'text' => 'КОГДА ТЫ ДОМА: как «умный дом» LG приходит на выручку во времена турбулентности',
            ],
            [
                'type-card' => 'card-fifth',
                'img' => 'new-1.webp',
                'category' => 'Архивариус',
                'title' => 'Мосты всей жизни. В жизни Евгения Патона не было случайностей',
                'text' => 'Его называли человеком из будущего, гениальные идеи которого по сей день используются при изготовлении сверхпрочных сплавов для мостов, железных дорог и даже космических станций. ',
            ],
        ];
        $newsRating = [
            [
                'type-card' => 'card-fourth',
                'img' => 'blurb-10.webp',
                'special-text' => '100',
                'category' => 'Рейтинг',
                'subtitle' => 'Рейтинг 2019',
                'text' => 'Самые влиятельные украинцы'
            ],
            [
                'type-card' => 'card-fourth',
                'img' => 'blurb-11.webp',
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
                'img' => 'new-8.webp',
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
                'img' => 'new-9.webp',
                'category' => 'мир',
                'text' => 'Дресс-код постапокалипсиса. Как коронавирус и карантин навсегда изменили стиль',
            ],
            [
                'img' => 'new-9.webp',
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
