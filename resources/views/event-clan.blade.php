@extends('layouts.site')

@section('content')
    <div class="jumbotron">
        <div class="container">
<p>
    Переменные с именем евента и клана
    $page_title = "Статистика клана <a rel='external nofollow' href='http://www.heroeswm.ru/clan_info.php?id=" . $clan_id . "'><img alt='' src='http://im.heroeswm.ru/i_clans/l_" . $clan_id . ".gif'/> " . $CLAN['title'] . "</a> по ивенту '<a href='/services/event_stats/" . $Event['title'] . "/'>" . $Event['title_rus'] . "</a>'";
    $page_desc = "Статистика боевого клана " . $CLAN['title'] . " по прошедшему ивенту '" . $Event['title_rus'] . "'";
</p>
        </div>
    </div>
    if (!$CLAN['hidden'] || $USER_STATUS >= 2 || (isset($_SESSION['id']) && $_SESSION['clan'] == $clan_id)) {

    //список ячеек и параметры выборки

    if ($Event['title'] == 'bwar') {
    $Cell = array("battles_all" => "Всего боёв", "battles_good" => "Боёв в зачёт", "battles_clan" => "Боёв за клан", "wins_all" => "Всего побед", "wins_good" => "Побед в зачёт", "wins_clan" => "Побед за клан", "glory" => "БС", "points" => "Очки", "expr" => "Опыт", "umka" => "Умелка");
    $order_by = "`battles_all` DESC, `battles_good` DESC";
    }
    else if ($Event['title'] == 'rs' or $Event['title'] == 'tj') {
    $Cell = array("battles" => "Боёв всего", "clan_battles" => "Боёв за клан", "clan_wins" => "Побед за клан", "wins" => "Всего побед",  "expr" => "Боевой опыт", "umka" => "Умелка", "gold" => "<img alt='Золото' src='/images/resources/gold.gif'/> Золото", "crystal" => "<img alt='Кристаллы' src='/images/resources/tjcrystal.png'/>Кристаллы");
    $order_by = "`battles` DESC, `wins` DESC";
    }
    else if ($Event['title'] == 'mc614') {
    $Cell = array("battles" => "Боёв всего", "clan_battles" => "Боёв за клан", "clan_wins" => "Побед за клан", "wins" => "Побед вне клана",  "expr" => "Боевой опыт", "umka" => "Умелка", "gold" => "<img alt='Золото' src='/images/resources/gold.gif'/> Золото", "crystal" => "<img alt='Кристаллы' src='/images/resources/tjcrystal.png'/>Энергия", "battlessur" => "Бои с сурвилургами", "battlesother" => "Другие бои");
    $order_by = "`battles` DESC, `wins` DESC";
    }
    else if ($Event['title'] == 'bs1114') {
    $Cell = array("battles" => "Боёв всего", "clan_battles" => "Боёв за клан", "clan_wins" => "Побед за клан", "wins" => "Побед вне клана",  "expr" => "Боевой опыт", "umka" => "Умелка", "gold" => "<img alt='Золото' src='/images/resources/gold.gif'/> Золото", "crystal" => "<img alt='Энергия леса' src='/images/resources/bsenergy.png'/>Энергия леса", "battlessur" => "Бои с сурвилургами", "battlesother" => "Другие бои", "lvl_maxs" => "Уровень леса");
    $order_by = "`battles` DESC, `wins` DESC";
    }
    else if ($Event['title'] == 'tj21114') {
    $Cell = array("battles" => "Боёв всего", "clan_battles" => "Боёв за клан", "clan_wins" => "Побед за клан", "wins" => "Побед вне клана",  "expr" => "Боевой опыт", "umka" => "Умелка", "gold" => "<img alt='Золото' src='/images/resources/gold.gif'/> Золото", "crystal" => "<img alt='Кристаллы' src='/images/resources/tjcrystal.png'/>Кристаллы", "battlessur" => "Бои с сурвилургами", "battlesother" => "Другие бои", "lvl_maxs" => "Уровень Портала");
    $order_by = "`battles` DESC, `wins` DESC";
    }
    else if ($Event['title'] == 'tj415') {
    $Cell = array("battles" => "Боёв всего", "clan_battles" => "Боёв за клан", "clan_wins" => "Побед за клан", "wins" => "Побед вне клана",  "expr" => "Боевой опыт", "umka" => "Умелка", "gold" => "<img alt='Золото' src='/images/resources/gold.gif'/> Золото", "crystal" => "<img alt='Кристаллы' src='/images/resources/tjcrystal.png'/><br>всего&nbsp;/&nbsp;за&nbsp;клан", "battlessur" => "Бои с сурвилургами", "battlesother" => "Другие бои", "lvl_maxs" => "Уровень Портала");
    $order_by = "`battles` DESC, `wins` DESC";
    }
    else if ($Event['title'] == 'tj715') {
    $Cell = array("battles" => "Боёв всего", "clan_battles" => "Боёв за клан", "clan_wins" => "Побед за клан", "wins" => "Побед вне клана",  "expr" => "Боевой опыт", "umka" => "Умелка", "gold" => "<img alt='Золото' src='/images/resources/gold.gif'/> Золото", "crystal" => "<img alt='Кристаллы' src='/images/resources/tjcrystal.png'/><br>всего&nbsp;/&nbsp;за&nbsp;клан", "battlessur" => "Бои с сурвилургами", "battlesother" => "Другие бои", "lvl_maxs" => "Уровень Портала");
    $order_by = "`battles` DESC, `wins` DESC";
    }
    else if ($Event['title'] == 'tj1115') {
    $Cell = array("battles" => "Боёв всего", "clan_battles" => "Боёв за клан", "clan_wins" => "Побед за клан", "wins" => "Побед вне клана",  "expr" => "Боевой опыт", "umka" => "Умелка", "gold" => "<img alt='Золото' src='/images/resources/gold.gif'/> Золото", "crystal" => "<img alt='Кристаллы' src='/images/resources/tjcrystal.png'/><br>всего&nbsp;/&nbsp;за&nbsp;клан", "battlessur" => "Бои с сурвилургами", "battlesother" => "Другие бои", "lvl_maxs" => "Уровень Портала");
    $order_by = "`battles` DESC, `wins` DESC";
    }
    else if ($Event['title'] == 'tj316' or $Event['title'] == 'tj217') {
    $Cell = array("battles" => "Боёв всего", "clan_battles" => "Боёв за клан", "clan_wins" => "Побед за клан", "wins" => "Побед вне клана",  "expr" => "Боевой опыт", "umka" => "Умелка", "gold" => "<img alt='Золото' src='/images/resources/gold.gif'/> Золото", "crystal" => "<img alt='Кристаллы' src='/images/resources/tjcrystal.png'/>", "battlessur" => "Бои с сурвилургами", "battlesother" => "Другие бои", "lvl_maxs" => "Уровень Портала");
    $order_by = "`battles` DESC, `wins` DESC";
    }
    else if ($Event['title'] == 'zp616') {
    $Cell = array("battles" => "Боёв всего", "clan_battles" => "Боёв за клан", "clan_wins" => "Побед за клан", "wins" => "Побед вне клана",  "expr" => "Боевой опыт", "umka" => "Умелка", "gold" => "<img alt='Золото' src='/images/resources/gold.gif'/> Золото", "crystal" => "<img alt='Энергия' src='/images/resources/tjcrystal.png'/>", "battlessur" => "Бои с сурвилургами", "battlesother" => "Другие бои", "lvl_maxs" => "Уровень Пещер");
    $order_by = "`battles` DESC, `wins` DESC";
    }
    else if ($Event['title'] == 'hp716') {
    $Cell = array("battles" => "Боёв всего", "clan_battles" => "Боёв за клан", "clan_wins" => "Побед за клан", "wins" => "Побед вне клана",  "expr" => "Боевой опыт", "umka" => "Умелка", "gold" => "<img alt='Золото' src='/images/resources/gold.gif'/> Золото", "crystal" => "<img alt='Серебро' src='/images/resources/silver.png'/>", "battlessur" => "Бои с сурвилургами", "battlesother" => "Другие бои");
    $order_by = "`battles` DESC, `wins` DESC";
    }
    else if ($Event['title'] == 'hp117') {
    $Cell = array("battles" => "Боёв всего", "clan_battles" => "Боёв за клан", "clan_wins" => "Побед за клан", "wins" => "Побед вне клана",  "expr" => "Боевой опыт", "umka" => "Умелка", "gold" => "<img alt='Золото' src='/images/resources/gold.gif'/> Золото", "crystal" => "<img alt='Серебро' src='/images/resources/silver.png'/>", "battlessur" => "Бои с сурвилургами", "battlesother" => "Другие бои");
    $order_by = "`battles` DESC, `wins` DESC";
    }
    else if ($Event['title'] == 'sb615') {
    $Cell = array("battles" => "Боёв всего", "clan_battles" => "Боёв за клан", "clan_wins" => "Побед за клан", "wins" => "Побед вне клана",  "expr" => "Боевой опыт", "umka" => "Умелка", "gold" => "<img alt='Золото' src='/images/resources/gold.gif'/> Золото", "crystal" => "Очки<br>всего&nbsp;/&nbsp;за&nbsp;клан", "battlessur" => "Бои с сурвилургами", "battlesother" => "Другие бои", "cnt_w" => "Убито генералов");
    $order_by = "`battles` DESC, `wins` DESC";
    }
    else {
    $Cell = array("battles" => "Боёв всего", "clan_battles" => "Боёв за клан", "clan_wins" => "Побед за клан", "wins" => "Побед вне клана", "expr" => "Боевой опыт", "umka" => "Умелка", "gold" => "<img alt='Золото' src='/images/resources/gold.gif'/> Золото", "crystal" => "<img alt='Кристаллы' src='/images/resources/tjcrystal.png'/> Кристаллы", "battlessur" => "Бои с сурвилургами", "battlesother" => "Другие бои");
    $order_by = "`battles` DESC, `wins` DESC";
    }

@endsection
