@extends('layouts.quize')

@section('content')
    <div class="container-fluid qyizBack" style="background-image: url('{{$data->image}}')">
        <div class="container quizeQues">
            <div class="quizeTitle">
                {{$data->title}}
            </div>
            <input type="hidden" class="idQuize" value="{{$data->id}}">
            <div class="thirty_persent_right">{!! $data->thirty_persent_right !!}</div>
            <div class="fifty_persent_right">{!! $data->fifty_persent_right !!}</div>
            <div class="seventy_persent_right">{!! $data->seventy_persent_right !!}</div>
            <div class="hundred_right">{!! $data->hundred_right !!}</div>
            @csrf
            <div class="quize">
                {!! $data->description !!}

            </div>
            <div class="btn-block quizeBtn">
                <a class="btn quizeNext" href="#">Начать квиз</a>
            </div>

        </div>
    </div>
@endsection
