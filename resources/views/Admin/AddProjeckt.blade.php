@extends('layouts.admin')

@section('content')
    <form method="post" action="">
        @csrf
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" value="{{old('title')}}" name="title" id="title" placeholder="Заголовок" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="img">Картинка</label>
            <input type="files" value="{{old('img')}}" name="img" id="img" placeholder="Картинка" class="form-control" >
        </div>
        <div class="form-group">
            <label for="date_start">Заголовок</label>
            <input type="text" value="{{old('title')}}" name="title" id="title" placeholder="Заголовок" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Описание</label>
            <textarea id="description" name="description">{{old('description')}}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Создать</button>
    </form>
@endsection
