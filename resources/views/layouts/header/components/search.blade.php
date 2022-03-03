<div class="{{ $class ?? '' }} c-search">
    <button 
        type="button" 
        class="c-search__button js--toggle-menu" data-content="js--toggle-search">
        <svg class="c-search__icon">
            <use xlink:href="{{ mix('/grafical/icons/sprite.svg') }}#search"></use>
        </svg>
    </button>
    <div class="c-search__menu c-search-menu js--toggle-search">
        @include('components.logo', [
            'class' => 'c-search-menu__logo' 
        ])
        <button 
            type="button"
            class="c-search-menu__remove js--close-menu" data-content="js--toggle-search">
        </button>
        <form 
            action="#" 
            class="c-search-menu__form js--search">
            <input 
                type="text" 
                class="c-search-menu__input"
                data-pristine-minlength="3"
                data-pristine-required-message="Hello moto"
                placeholder="Поиск по сайту">
            <button 
                type="submit"
                class="c-search-menu__button">
                <svg class="c-search-menu__icon">
                    <use xlink:href="{{ mix('/grafical/icons/sprite.svg') }}#search"></use>
                </svg>
            </button>
        </form>
    </div>
</div>