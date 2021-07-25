@extends('layouts.admin')

@section('content')
    <div class="col-xs-12">
        <a class="btn btn-info" href="{{route('addQuize')}}">Добавить Квиз</a>
    </div>
    @if(count($data)>0)
        @foreach ($data as $line)
        @endforeach
    @else
        <div class="noQuieze">Еще не созданно ни одного квиза</div>
    @endif
@endsection
