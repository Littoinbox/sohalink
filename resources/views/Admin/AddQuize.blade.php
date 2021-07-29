@extends('layouts.admin')

@section('content')
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Название квиза</label>
            <input type="text"  value="{{old('title')}}" name="title" id="title" placeholder="Название квиза" class="form-control" >
        </div>

        <div class="form-group">
            <label for="img">Картинка Квиза</label>
            <input type="file" value="{{old('fileImg')}}" name="fileImg" id="img" placeholder="Картинка квиза" class="form-control">
        </div>


        <div class="form-group">
            <label for="introText">Вступистельный текст</label>
            <input type="text" value="{{old('introText')}}" name="introText" id="introText" placeholder="Вступистельный текст" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Описание квиза</label>
            <textarea name="description" id="description">{{old('description')}}</textarea>
        </div>
        <div class="form-group">
            <label for="thirty_persent_right">0-30% отвеченых вопросов</label>
            <textarea name="thirty_persent_right" id="thirty_persent_right">{{old('thirty_persent_right')}}</textarea>
        </div>
        <div class="form-group">
            <label for="fifty_persent_right">30-50% отвеченых вопросов</label>
            <textarea name="fifty_persent_right" id="fifty_persent_right">{{old('fifty_persent_right')}}</textarea>
        </div>
        <div class="form-group">
            <label for="seventy_persent_right">50-70% отвеченых вопросов</label>
            <textarea name="seventy_persent_right" id="seventy_persent_right">{{old('seventy_persent_right')}}</textarea>
        </div>
        <div class="form-group">
            <label for="hundred_right">100% отвеченых вопросов</label>
            <textarea name="hundred_right" id="hundred_right">{{old('hundred_right')}}</textarea>
        </div>
        @csrf
        <button type="submit" class="btn btn-success">Создать</button>
    </form>
@endsection
