<!DOCTYPE html>
<html lang="en">+
<head>
    <meta charset="utf-8">

    <title>Базовая страница</title>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>

<body>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Проект</a>
        </div>
        <ul id="navbar" class="menu">
            <li><a href="http://www.heroeswm.ru/">Старая игра</a></li>
            <li><a href="#">Новая игра</a></li>
            <li><a href="/page/add">Добавить материал</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Сервисы <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header"><a href="/services">Список сервисов</li>
                    <li><a href="/service/clan/events">Статистика эвента</a></li>
                    <li><a href="/service/clan/events">Чтонибудь-ещё</a></li>
                 </ul>
            </li>

            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Авторизация</a></li>
                <li><a href="{{ route('register') }}">Регистрация</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul><!--/.navbar-collapse -->
    </div>
</nav>

@if(count($errors) > 0)

    <div class="alert alert-danger">

        <ul>

            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </ul>

    </div>

@endif

@yield('content')
</body>
</html>
>