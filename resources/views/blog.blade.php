<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta property="og:image" content="path/to/image.jpg">
   
    <meta name="theme-color" content="#000">
    <meta name="msapplication-navbutton-color" content="#000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link href="css/bootstrap.min.css" media="screen, projection" rel="stylesheet" type="text/css">
    <link href="css/screen.css" media="screen, projection" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>

<body>

<header>
    <ul class="header-list">
        <li><a href="#top" class="header-list__item">Главная</a></li>
        <li><a href="#main-form" class="header-list__item">Реквизиты</a></li>
        <li><a href="#info" class="header-list__item">Контакты</a></li>    
    </ul>

    <div class="form-group">
        <select class="form-control" id="exampleFormControlSelect1">
            <option id="lang-ru">Русский</option>
            <option id="lang-ua">Українська</option>
            <option id="lang-en">English</option>
        </select>
    </div>
</header>

<section class="blog content content_sm">
    <h2 class="section__header">Блог</h2>

    <div class="article-list">
        <a href="#" class="article-list__item">
            <div class="article-list__item_image"><img src="img/1.jpg" alt="" height="100%"></div>
            <div class="article-list__item_title">
                <span>Lorem Ipsum</span>
            </div>
        </a>

        <a href="#" class="article-list__item">
            <div class="article-list__item_image"><img src="img/leaf.png" alt="" height="100%"></div>
            <div class="article-list__item_title">
                <span>Lorem Ipsum</span>
            </div>
        </a>

        <a href="#" class="article-list__item">
            <div class="article-list__item_image"><img src="img/leaf.png" alt="" height="100%"></div>
            <div class="article-list__item_title">
                <span>Lorem Ipsum</span>
            </div>
        </a>

        <a href="#" class="article-list__item">
            <div class="article-list__item_image"><img src="img/leaf.png" alt="" height="100%"></div>
            <div class="article-list__item_title">
                <span>Lorem Ipsum</span>
            </div>
        </a>
    </div>
</section>

</body>
</html>

<script src="js/langs.js"></script>