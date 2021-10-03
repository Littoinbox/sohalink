@extends('layouts.admin')

@section('content')
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" value="{{old('title')}}" name="title" id="title" placeholder="Заголовок" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="img">Картинка</label>
            <input type="file" value="{{old('img')}}" name="img" id="img" placeholder="Картинка" class="form-control" >
        </div>
        <div class="form-group">
            <label for="datetime">Дата проведения</label>
            <input type="datetime-locale" value="{{old('date_start')}}" name="date_start" id="datetime" placeholder="дата начала" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="place">Место проведеия</label>
            <input type="text" value="{{old('place')}}" name="place" id="place" placeholder="Место проведения" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Описание</label>
            <textarea id="description" name="description">{{old('description')}}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Создать</button>
    </form>
@endsection
