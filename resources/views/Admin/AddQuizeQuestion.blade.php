@extends('layouts.admin')

@section('content')
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_quize" value="{{$id}}">
        <div class="form-group">
            <label for="question">Вопрос Квиза</label>
            <textarea name="question" id="question">{{old('question')}}</textarea>
        </div>
        <div class="form-group ans">
            <label for="answer">Ответ</label>
            <textarea name="answer[]" class="answer"></textarea>
            <label >Правильный ответ</label>
            <input type="radio" value="1" class="answerTrue" name="answerTrue"><br />
            <button type="button" class="btn btn-danger delQuest">Удалить ответ</button>
        </div>
        <button type="button" class="btn btn-success addQuest">Добавить ответ</button>
        @csrf
        <button type="submit" class="btn btn-success saveQuest">Сохранить</button>
    </form>
@endsection
