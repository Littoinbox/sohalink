@extends('layouts.admin')

@section('content')
    <div class="btn-block">
        <a class="btn btn-info" href="{{route('addProjeckt')}}">Добавить новый проект</a>
    </div>
    <div class="projecktViewe">
        @if(count($projecktData)>0)
            @foreach ($projecktData as $proj)
                <p>{{$proj->title}} -  {{$proj->date_start}} <a class="btn btn-success" href="{{route('editProjeckt', $proj->id)}}">Редактировать</a> <a class="btn btn-danger" href="{{route('delProjeckt', $proj->id)}}">Удалить</a></p>
            @endforeach
        @else
            Нет Событий
        @endif
    </div>
@endsection

