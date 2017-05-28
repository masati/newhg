<script>
    $(function() {
        $('.dropdown a.dropdown-toggle').click(function() {
            location.href = $(this).attr('href');
        });
    });
</script>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">Home</a>
                </div>
                <ul id="navbar" class="menu">
                    <li><a href="/articles">Статьи</a></li>
                    <li>
                        <a href="/services">Сервисы</a>
{{--                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/service/clan/events">Статистика эвента</a></li>
                        </ul>--}}
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
                                    <a href="/user">
                                        Profile
                                    </a>
                                </li>
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

