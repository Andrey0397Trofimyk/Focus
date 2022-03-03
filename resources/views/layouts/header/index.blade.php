<header class="header">
    <div class="header__container container container--fluid">
        @include('layouts.header.components.burger', [
            'class' => 'header__burger'
        ])
        <div class="header__langs">
            <a href="" class="header__lang header__lang--ru js--languages">ru</a>
            <a href="" class="header__lang header__lang--ua js--languages active">ua</a>
        </div>
        @include('layouts.header.components.search', [
            'class' => 'header__search'
        ])
    </div>
</header>