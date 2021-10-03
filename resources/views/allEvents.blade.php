@extends('layouts.main')

@section('content')
    <h1 class="afisha">Афиша событий</h1>
    <div class="date-map">
        <div class="col-xs-12 col-md-6"><span class="monthViwe">{{getMonth(date('m'))}}</span></div>
        <div class="col-xs-12 col-md-6 right">
            <a class="prev_month" href="#">{{getMonth(date("m", strtotime("-1 month",  time())))}}</a>
            <a class="next_month" href="#">{{getMonth(date("m", strtotime("+1 month",  time())))}}</a>
        </div>
    </div>
    <div class="monthCalendar">
        @foreach ($elements as $element)
            <div class="eventDayly row">
                <div class="col-xs-2 dateEvent">{{date('d.m', strtotime($element->date_start))}}
                    <span class="timeEvent">Начало в <br />{{date('H:i', strtotime($element->date_start))}}</span>
                </div>
                <div class="col-xs-10 titleEvent"><a href="/event/{{$element->id}}">{{$element->title}}</a></div>
            </div>
        @endforeach
    </div>
@endsection

<?php
    function getMonth($month){
        $months = ["01" => "Январь",
            "02" => "Февраль",
            "03" => "Март",
            "04" => "Апрель",
            "05" => "Май",
            "06" => "Июнь",
            "07" => "Июль",
            "08" => "Август",
            "09" => "Сентябрь",
            "10" => "Октябрь",
            "11" => "Ноябрь",
            "12" => "Декабрь"
        ];
        return $months[$month];
    }
    ?>
