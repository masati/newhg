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

<<<<<<< HEAD

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
<footer class="footer">
    <p>&copy; 2017 Company, Inc.</p>
    <div class="btn-group dropup">
        <button type="button" class="btn btn-default">Наши друзья</button>
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
            <span class="sr-only">Меню с переключением</span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="http://dy.su">ДиСу</a></li>
            <li><a href="http://www.heroeswm.ru/">Герои власти и денег</a></li>
            <li><a href="http://heroes-guide.ru">Гайд</a></li>
            <li class="divider"></li>
            <li><a href="http://masati.ru/store">Клановые склады</a></li>
            <li><a href="http://masati.ru/warstat">Сервис дэфов</a></li>
        </ul>
    </div>
</footer>
@yield('content')
</body>
</html>
=======
@include('_partials.header')
<div id="wrap">
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
</div>
@include('_partials.footer')
</body>
</html>
>>>>>>> 4aa5d2c84e9dad44fecc1e687300e1355c596de5
