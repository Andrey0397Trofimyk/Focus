<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Focus</title>

    <link rel="prefetch" href="{{ mix('/fonts/CeraPro-Medium.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="prefetch" href="{{ mix('/fonts/CeraPro-Bold.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="prefetch" href="{{ mix('/fonts/CeraPro-Regular.woff2') }}" as="font" type="font/woff2" crossorigin>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
    @include('layouts.header.index')
    <main class="main">
        @include('components.sliders.basic-slider', [
            'class' => 'main__basic-slider'    
        ])
        @include('components.list-news',[
            'newsList' => $newsListFirst,
            'class' => 'main__list-news-first'
        ])
        @include('components.short-news', [
            'class' => 'main__short-news'    
        ])
        @include('components.blurb.blurb-first', [
            'class' => 'main__blurb-first'    
        ])
        @include('components.list-news',[
            'newsList' => $newsListSecond,
            'class' => 'main__list-news-second'
        ])
        @include('components.list-news',[
            'newsList' => $newsListFourth,
            'class' => 'main__list-news-fourth',
            'title' => 'Украина'
        ])
        @include('components.sliders.rating',[
            'newsList' => $newsRating,
            'class' => 'main__rating'
        ])
        @include('components.sliders.now-popular',[
            'class' => 'main__now-popular'
        ])
        @include('components.list-news',[
            'newsList' => $newsListThird,
            'class' => 'main__list-news-third',
            'title' => 'красивая страна'
        ])
        @include('components.sliders.news-slider',[
            'class' => 'main__news-slider'
        ])
        @include('components.list-news', [
            'newsList' => $newsListFifth,
            'class' => 'main__list-news-fifth'    
        ])
        @include('components.blurb.blurb-second', [
            'class' => 'main__blurb-second'    
        ])

    </main>
    @include('layouts.footer.index')
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>