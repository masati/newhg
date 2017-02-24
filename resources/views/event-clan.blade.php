<style>
    table {
        font-size: 12px;
        text-align: right;
        padding: 4px;
            }
    thead {
        text-align: center;
        font-size: 15px;
        border-spacing: 5px;
        padding: 4px;
    }
    th {
        padding: 4px;
        border-spacing:5;
    }

</style>
@extends('layouts.site')

@section('content')
    <div class="jumbotron">
        <div class="container">
<p>
    Переменные с именем евента и клана
    $page_title = "Статистика клана <a rel='external nofollow' href='http://www.heroeswm.ru/clan_info.php?id=" . $clan_id . "'><img alt='' src='http://im.heroeswm.ru/i_clans/l_" . $clan_id . ".gif'/> " . $CLAN['title'] . "</a> по ивенту '<a href='/services/event_stats/" . $Event['title'] . "/'>" . $Event['title_rus'] . "</a>'";
    $page_desc = "Статистика боевого клана " . $CLAN['title'] . " по прошедшему ивенту '" . $Event['title_rus'] . "'";
</p>
            <p>
                Активная ссылка на нике персонажа в списке открывает страницу с детализацией боев данного персонажа в период ивента. Дается расшифровка боев по типам, количество набранной умелки, выпавшие артефакты и т.п.
                Красным в списке выделены игроки, кто вступал, выходил из клана или был исключен в период ивента. Так же отмечены игроки, которые весь ивент были в клане, но вышли из клана сразу после закрытия портала. Если игрок вышел сам, в комментарии при наведении на его ник написано "вышел", если был исключен, то показывает полностью или частично комментарий к его исключению (из лога клана), если игрок вступил в клан, то комментарий пуст.
            </p>
        </div>
        <h1>Рисуем табличку</h1>
message($ivent);

        if ($ivent = 'tj217') {
        <div>
            <table>
                <thead>
                <tr>
                    <th>№</th>
                    <th>Персонаж</th>
                    <th>Боёв всего</th>
                    <th>Побед за клан</th>
                    <th>Побед вне клана</th>
                    <th>Боевой опыт</th>
                    <th>Умелка</th>
                    <th>Золото</th>
                    <th>Какаято хрень</th>
                    <th>За клан чтотам</th>
                    <th>Бои с суривлургами</th>
                    <th>Другие бои</th>
                    <th>Уровень портала</th>


                </tr>
                </thead>

            </table>

        </div>
            }

    </div>

@endsection
