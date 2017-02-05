<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Базовая страница</title>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jumbotron.css') }}" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Проект</a>
        </div>
        <ul id="navbar" class="menu">
            <li><a href="http://www.heroeswm.ru/">Старая игра</a></li>
            <li><a href="http://dev.heroesaom.com/">Новая игра</a></li>
        </ul><!--/.navbar-collapse -->
    </div>
</nav>
@yield('content')
</body>
</html>
>