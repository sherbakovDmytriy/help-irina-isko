<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    @yield('title')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta property="og:image" content="path/to/image.jpg">
   
    <meta name="theme-color" content="#000">
    <meta name="msapplication-navbutton-color" content="#000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">

    @yield('head-start')

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" media="screen, projection" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/screen.css') }}" media="screen, projection" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @yield('head-end')
</head>

<body>

<header>
    <ul class="header-list">
        <li>
            <a href="{{ env('APP_URL') . '#top' }}" class="header-list__item">Главная</a>
        </li>
        <li>
            <a href="{{ env('APP_URL') . '#main-form' }}" class="header-list__item">Реквизиты</a>
        </li>
        <li>
            <a href="{{ env('APP_URL') . '#info' }}" class="header-list__item">Контакты</a>
        </li>
        <li>
            <a href="{{ url('/blog') }}" class="header-list__item">Блог</a>
        </li>
    </ul>

    <div class="form-group">
        <select class="form-control" id="exampleFormControlSelect1">
            <option id="lang-ru">Русский</option>
            <option id="lang-ua">Українська</option>
            <option id="lang-en">English</option>
        </select>
    </div>
</header>

@yield('body')

</body>
</html>

<script src="js/langs.js"></script>

@yield('scripts')