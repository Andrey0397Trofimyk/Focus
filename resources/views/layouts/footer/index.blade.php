<footer class="footer">
    <div class="footer__container container container--fluid">
        <div class="footer__wrapper footer__wrapper--first">
            
            @include('components.logo', [
                'class' => 'footer__logo c-logo--footer',
                'width' => '184',
                'height' => '41' 
            ])
            
            @php
                $footerLink = [    
                    'Политика',
                    'УКРАИНА',
                    'ЭКОНОМИКА',
                    'культура',
                    'Мнение',
                    'рейтинги',
                    'Длинный фокус',
                    'мир'
                ];
            @endphp
            <div class="footer__box">
                <ul class="footer__list">
                    @foreach($footerLink as $link)
                        <li class="footer__item">
                            <a 
                                href="#" 
                                class="footer__link">
                                {{ $link }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="footer__adv c-adv">
                    <ul class="c-adv__list">
                        @php
                            $blurbFooter = [
                                0 => 1, 
                                1 => 2, 
                                2 => 4];
                        @endphp
                        @foreach($blurbFooter as $blurb)
                            <li class="c-adv__item">
                                <a href="#" class="c-adv__link">
                                    <figure class="c-adv__figure">
                                        <img 
                                            src="grafical/icons/no-img.svg" 
                                            data-srcset="
                                                grafical/images/resize-50/blurb-{{ $blurb }}.webp 1x,
                                                grafical/images/resize-75/blurb-{{ $blurb }}.webp 2x,
                                                grafical/images/resize-90/blurb-{{ $blurb }}.webp 3x"
                                            alt="advert"
                                            width="85"
                                            height="110"
                                            decoding="async"
                                            class="c-adv__img lazyload">
                                    </figure>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="c-adv__inner">
                        <span class="c-adv__share">Гарантировано получите скидку <span>-10%</span></span>
                        @include('components.button', [
                            'class' => 'c-adv__button-link'    
                        ])
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__wrapper">
            <div class="footer__inner">
                <p>
                    Все права на материалы, опубликованные на данном ресурсе, принадлежат ООО "ФОКУС МЕДИА". Какое-либо использование материалов без письменного разрешения ООО "ФОКУС МЕДИА" - запрещено. При использовании материалов с данного ресурса гиперссылка 
                    <a href="">focus.ua</a>
                    обязательна.
                </p>
                <p>
                    Данный ресурс — для пользователей возрастом от 18 лет и старше.
                </p>
            </div>
            <div class="footer__inner">
                <p>
                    Перепечатка, копирование или воспроизведение информации, содержащей ссылку на агентство ИнА "Українські Новини", в каком-либо виде строго запрещены.
                </p>
                <p>
                    Все материалы, которые размещены на этом сайте со ссылкой на агентство "Интерфакс-Украина", не подлежат дальнейшему воспроизведению и/или распространению в любой форме, кроме как с письменного разрешения агентства.
                </p>
                <p>
                    Материалы с плашками "Р", "Новости партнеров", "Новости компаний", "Новости партий", "Инновации", "Позиция", "Спецпроект при поддержке" публикуются на коммерческой основе.
                </p>
            </div>
        </div>
        <div class="footer__wrapper">
            <span class="footer__info-text">
                © 2020 Фокус. Все права защищены.
            </span>
            <a href="#" class="footer__info-text footer__info-text--link">
                Політика конфіденційності
            </a>
        </div>
    </div>
</footer>