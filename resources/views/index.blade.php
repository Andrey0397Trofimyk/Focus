<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Focus</title>

    <link rel="preload" href="{{ mix('/fonts/CeraPro-Bold.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ mix('/fonts/CeraPro-Regular.woff2') }}" as="font" type="font/woff2" crossorigin>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
    @include('layouts.header.index')
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>