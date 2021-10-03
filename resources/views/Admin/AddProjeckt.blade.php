@extends('layouts.admin')

@section('content')
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" value="@if(!empty(old('title'))){{old('title')}}@elseif(!empty($element)){{$element->title}}@endif" name="title" id="title" placeholder="Заголовок" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="img">Картинка</label>
            <input type="file" value="@if(!empty(old('img')))){{old('img')}}@elseif(!empty($element)){{$element->img}}@endif" name="img" id="img" placeholder="Картинка" class="form-control">
        </div>
        <div class="form-group">
            <label for="datetime">Дата проведения</label>
            <div class="input-group">
                <input  id="datetimepicker1" name="date_start" type="text" class="form-control" value="@if (!empty(old('date_start')))){{old('date_start')}}@elseif (!empty($element)){{$element->date_start}}@endif" />
                <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
                 </span>
            </div>

        </div>
        <div class="form-group">
            <label for="place">Место проведеия</label>
            <input type="text" value="@if(!empty(old('place')))){{old('place')}}@elseif(!empty($element)){{$element->place}}@endif" name="place" id="place" placeholder="Место проведения"
                   class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Описание</label>
            <textarea id="description" name="description">@if(!empty(old('description')))){{old('description')}}@elseif(!empty($element)){{$element->description}}@endif</textarea>
        </div>

        <button type="submit" class="btn btn-success">Сохранить</button>
    </form>

@endsection
