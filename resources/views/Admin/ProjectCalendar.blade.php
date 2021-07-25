@extends('layouts.admin')

@section('content')
    <div class="btn-block">
        <a class="btn btn-info" href="{{route('addProjeckt')}}">Добавить новый проект</a>
    </div>
    <div class="projecktViewe">
        @if(count($projecktData)>0)
            @foreach ($projecktData as $proj)
            @endforeach
        @else
            Нет Событий
        @endif
    </div>
@endsection

