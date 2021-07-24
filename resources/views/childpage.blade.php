@extends('layouts.main')

@section('content')
    <h1 class="skazki">Детские сказки</h1>
    <div class="col-xs-12 albumAbout">
        Проект реализован студией звукозаписи "Сказка Records" г. Корсаков под руководством Евгения Воронова.
    </div>
    <div class="col-xs-12 col-md-6 album">
        <div class="imgAlbum">
            <img src="/images/skazki/1/1.jpg" class="img-responsive">
        </div>
        <div class="audioTrack">
            <audio src="/media/skazki/1.baba yga-Skazka Records.mp3" preload="auto" controls></audio>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 album">
        <div class="imgAlbum">
            <img src="/images/skazki/1/2.jpg" class="img-responsive">
        </div>
        <div class="audioTrack">
            <audio src="/media/skazki/3.Koza-dereza-Skazka Records.mp3" preload="auto" controls></audio>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 album">
        <div class="imgAlbum">
            <img src="/images/skazki/1/3.jpg" class="img-responsive">
        </div>
        <div class="audioTrack">
            <audio src="/media/skazki/4.Malchik s palchik-Skazka Records.mp3" preload="auto" controls></audio>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 album">
        <div class="imgAlbum">
            <img src="/images/skazki/1/4.jpg" class="img-responsive">
        </div>
        <div class="audioTrack">
            <audio src="/media/skazki/5 Муха цокотуха Skazka-Records.mp3" preload="auto" controls></audio>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 album">
        <div class="imgAlbum">
            <img src="/images/skazki/1/5.jpg" class="img-responsive">
        </div>
        <div class="audioTrack">

            <audio src="/media/skazki/2.Tereshechka-Skazka Records.mp3" preload="auto" controls></audio>
        </div>
    </div>
    <div class="col-xs-12 albumDescr">
        <span>Роли озвучивали:</span><br />

        Вероника Назимко, Карина Куршива, Егор Пак, Виктория Игнатьева, Мария Скиданова, Макаров Андрей, Севастьянова Татьяна, Фетисова Екатерина, Александр Ли, Александра Анисимова, Оксана Зотова, Светлана Негматулина, Наташа Пенова, Евгений Воронин и Александр Утюшев.
    </div>

@endsection
