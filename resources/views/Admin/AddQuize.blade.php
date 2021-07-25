@extends('layouts.admin')

@section('content')
    <form method="post">
        @csrf

        <div class="form-group">
            <label for="name">Название квиза</label>
            <input type="text" name="name" id="name" placeholder="Название квиза" class="form-control">
        </div>
        <div class="form-group">
            <label for="img">Картинка Квиза</label>
            <input type="file" name="fileImg" id="img" placeholder="Картинка квиза" class="form-control">
        </div>
        <div class="form-group">
            <label for="introText">Вступистельный текст</label>
            <input type="text" name="introText" id="introText" placeholder="Вступистельный текст" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Описание квиза</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <div class="form-group">
            <label for="thirty_persent_right">0-30% отвеченых вопросов</label>
            <textarea name="thirty_persent_right" id="thirty_persent_right"></textarea>
        </div>
        <div class="form-group">
            <label for="fifty_persent_right">30-50% отвеченых вопросов</label>
            <textarea name="fifty_persent_right" id="fifty_persent_right"></textarea>
        </div>
        <div class="form-group">
            <label for="seventy_persent_right">50-70% отвеченых вопросов</label>
            <textarea name="seventy_persent_right" id="seventy_persent_right"></textarea>
        </div>
        <div class="form-group">
            <label for="hundred_right">100% отвеченых вопросов</label>
            <textarea name="hundred_right" id="hundred_right"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Войти</button>
    </form>
@endsection
