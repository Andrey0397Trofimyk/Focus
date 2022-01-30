<div class="{{ $class ?? '' }} c-burger">
    <button 
        type="button"
        class="c-burger__button js--toggle-menu" data-content="c-burger-menu"
        >
        <span class="c-burger__line"></span>
        <span class="c-burger__line"></span>
        <span class="c-burger__line"></span>
    </button>
    <a href="#" class="c-burger__logo">
        <img 
            src="/grafical/images/logo.png" 
            alt="logo" 
            width="120px" 
            height="30px" 
            decoding="async"
            class="c-burger__logo-img">
    </a>
    <div class="c-burger__menu c-burger-menu">
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
        <div class="c-burger-menu__inner c-menu-list">
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
            <div class="c-burger-menu__inner c-menu-list">
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
                <picture>
                    <img src="" alt="">
                </picture>
                <span>
                    Гарантировано получите скидку
                    <span>-10%</span>
                </span>
            </a>
        </div>
    </div>
</div>