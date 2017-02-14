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