<div class="{{ $class ?? '' }}  c-list-news">
    <div class="c-list-news__container container container--wrap">
        <h2 class="c-list-news__title ui-title">
            {{ $title ?? '' }}
        </h2>
        <ul class="c-list-news__list">
            @foreach($newsList as $news)
                <li class="c-list-news__item @if(isset($news['special-block'])) c-list-news__item--special-block @endif">
                    @include('components.card.'.$news['type-card'], [
                        'class' => 'c-list-news__card',
                        'news' => $news
                    ])
                </li>
            @endforeach
        </ul>
    </div>
</div>