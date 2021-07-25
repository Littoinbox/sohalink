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
            <li class="active"><a href="/">На сайт</a></li>
            <li><a href="{{ route('AdminMain') }}">Главна</a></li>
            <li><a href="{{ route('AdminQuize') }}">Квизы</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><button class="login" aria-label="Личный кабинет" type="button"></button></li>
            <li><button class="search" aria-label="Поиск" type="button"></button></li>
        </ul>
    </div>
</div>
