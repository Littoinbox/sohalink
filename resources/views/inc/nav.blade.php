<div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <a class="logoInMenu" href="/"><img src="/images/min-logo.png"></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="/">Главная</a></li>
            <li><a href="{{route('about')}}">О проекте</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false" href="#">Коллаборации</a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('sahounb')}}">СахОУНБ</a></li>
                    <li><a href="{{route('kraeved')}}">Краеведы ОТВ</a></li>
                </ul>
            </li>
            <li><a href="{{route('childpage')}}">Детская страничка</a></li>
            <li><a href="{{route('podcast')}}">Подкасты SakhaLink</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false" href="#">Школа блогеров</a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('day')}}">Дни</a></li>
                    <li><a href="{{route('work')}}">Отчетные работы</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right hidden-xs">
            <li>
                <button class="login" aria-label="Личный кабинет" type="button"></button>
            </li>
            <li>
                <button class="search" aria-label="Поиск" type="button"></button>
            </li>
        </ul>
    </div>
</div>
