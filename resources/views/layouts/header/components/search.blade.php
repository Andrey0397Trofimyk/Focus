<div class="{{ $class ?? '' }} c-search">
    <button 
        type="button" 
        class="c-search__button js--toggle-menu" data-content="c-search-menu">
        <svg class="c-search__icon">
            <use xlink:href="/grafical/icons/sprite.svg#search"></use>
        </svg>
    </button>
    <div class="c-search__menu c-search-menu">
        @include('components.logo', [
            'class' => 'c-search-menu__logo' 
        ])
        <button 
            type="button"
            class="c-search-menu__remove js--menu-close">
        </button>
        <form 
            action="#" 
            class="c-search-menu__form">
            <input 
                type="text" 
                class="c-search-menu__input"
                placeholder="Поиск по сайту">
            <button 
                type="submit"
                class="c-search-menu__button">
                <svg class="c-search-menu__icon">
                    <use xlink:href="/grafical/icons/sprite.svg#search"></use>
                </svg>
            </button>
        </form>
    </div>
</div>