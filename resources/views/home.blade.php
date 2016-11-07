<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<ul>
    <li>
        <a href="{{ URL::to('/')}}">Бианале</a>
        <ul>
            <li>
                <a href="{{ URL::to('/program')}}">Програма</a>
            </li>
            <li>
                <a href="{{ URL::to('/terms')}}">Регламент</a>
            </li>
            <li>
                <a href="{{ URL::to('/apply-for-attendance')}}">Форма за участие</a>
            </li>
            <li>
                <a href="{{ URL::to('/about')}}">За нас</a>
            </li>
            <li>
                <a href="{{ URL::to('/vision')}}">Визия</a>
            </li>
        </ul>

    </li>
    <li>
        <a href="{{ URL::to('/scholarships')}}">Стипендии</a>
    </li>
    <li>
        <a href="{{ URL::to('/authors')}}">Автори</a>
    </li>
    <li>
        <a href="{{ URL::to('/events')}}">Събития</a>
    </li>
    <li>
        <a href="{{ URL::to('/news')}}">Новини</a>
    </li>
    <li>
        <a href="{{ URL::to('/partners')}}">Партньори</a>
    </li>
    <li>
        <a href="{{ URL::to('/archive')}}">Архиви</a>
    </li>
    <li>
        <a href="{{ URL::to('/contact')}}">Контакти</a>
    </li>
</ul>
</body>
</html>