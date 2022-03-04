<div class="{{ $class ?? '' }} c-burger">
    <button 
        type="button"
        class="c-burger__button js--toggle-menu" data-content="js--toggle-burger"
        >
        <span class="c-burger__line"></span>
        <span class="c-burger__line c-burger__line--center"></span>
        <span class="c-burger__line"></span>
    </button>
    @include('components.logo', [
        'class' => 'c-burger__logo' 
    ])
    <div class="c-burger__menu c-burger-menu js--toggle-burger">
        @php
            $menuList = [    
                'Категории',
                'Спецтема',
                'Рейтинги',
                'Подписка',
            ];
            $menuSubList = [    
                'Все Новости',
                'Политика',
                'Мир',
                'Авто',
            ];
            @endphp
        <div class="c-burger-menu__inner c-menu-list c-menu-list--first">
            <span class="c-menu-list__subtitle">
                Материалы
            </span>
            <ul class="c-menu-list__list">
                @foreach($menuList as $name)
                    <li class="c-menu-list__item">
                        <a href="#" class="c-menu-list__link">
                            {{$name}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="c-burger-menu__submenu">
            <div class="c-burger-menu__inner c-menu-list c-menu-list--second">
                <span class="c-menu-list__subtitle">
                    Разделы
                </span>
                <ul class="c-menu-list__list">
                    @foreach($menuSubList as $name)
                        <li class="c-menu-list__item">
                            <a href="#" class="c-menu-list__link">
                                {{$name}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <a href="#" class="c-burger-menu__advertising">
                <figure class="c-burger-menu__picture">
                    <img  
                        src="grafical/icons/no-img.svg"
                        data-srcset="
                            grafical/images/resize-50/blurb-4.webp 1x,
                            grafical/images/resize-75/blurb-4.webp 2x,
                            grafical/images/resize-90/blurb-4.webp 3x"
                        alt="advertising"
                        width="85"
                        height="110"
                        decoding="async"
                        class="c-burger-menu__img lazyload">
                </figure>
                <span class="c-burger-menu__text">
                    Гарантировано получите скидку
                    <span>-10%</span>
                </span>
            </a>
        </div>
    </div>
    <div class="c-burger__background"></div>
</div>