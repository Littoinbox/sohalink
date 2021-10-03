@extends('layouts.main')

@section('content')
    <h2>Афиша событий</h2>

    <div class="calendarMain">
        @if (count($calendar)>0)
            @foreach($calendar as $cal)
                <div class="calendarItem">
                    <div class="calendarImg">
                        <img src="/storage/{{$cal->image}}" class="img-responsive">
                    </div>
                    <div class="calendarTitle"><a href="/event/{{$cal->id}}">{{$cal->title}}</a></div>
                    <div class="calenderDate right">
                       {{date('d.m.Y H:i', strtotime($cal->date_start))}}
                    </div>
                </div>
            @endforeach
        @endif


    </div>
    <div class="allEvents">
        <a class="btn allEvents" href="{{route('allEvents')}}">Все события</a>
    </div>
    </div>
    <div class="container-fluid" id="video">
        <div class="container">
            <div class="videoCurses">
                <div class="videoCurse">
                    <!--<div class="videoCurseImg">
                        <img src="/images/course.jpg" class="img-responsive"/>
                    </div>
                    <div class="videoCurseDesc">
                        <div class="videoCurseTitle">
                            Курс №1
                        </div>
                        <p>Описание курса</p>
                    </div>-->
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/A7W7AY8pVIs?controls=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="videoCurse">
                    <!--<div class="videoCurseImg">
                        <img src="/images/course.jpg" class="img-responsive"/>
                    </div>
                    <div class="videoCurseDesc">
                        <div class="videoCurseTitle">
                            Курс №1
                        </div>
                        <p>Описание курса</p>
                    </div>-->
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/miBCtecf4BM?controls=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="videoCurse">
                    <!--<div class="videoCurseImg">
                        <img src="/images/course.jpg" class="img-responsive"/>
                    </div>
                    <div class="videoCurseDesc">
                        <div class="videoCurseTitle">
                            Курс №1
                        </div>
                        <p>Описание курса</p>
                    </div>-->
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/_lKL6uPBME0?controls=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="videoCurse">
                    <!--<div class="videoCurseImg">
                        <img src="/images/course.jpg" class="img-responsive"/>
                    </div>
                    <div class="videoCurseDesc">
                        <div class="videoCurseTitle">
                            Курс №1
                        </div>
                        <p>Описание курса</p>
                    </div>-->
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/7XBnSJwZ7Tw?controls=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div><!--
                    <div class="videoCurse">
                        <div class="videoCurseImg">
                            <img src="/images/course.jpg" class="img-responsive"/>
                        </div>
                        <div class="videoCurseDesc">
                            <div class="videoCurseTitle">
                                Курс №1
                            </div>
                            <p>Описание курса</p>
                        </div>
                    </div>
                    <div class="videoCurse">
                        <div class="videoCurseImg">
                            <img src="/images/course.jpg" class="img-responsive"/>
                        </div>
                        <div class="videoCurseDesc">
                            <div class="videoCurseTitle">
                                Курс №1
                            </div>
                            <p>Описание курса</p>
                        </div>
                    </div>
                    <div class="videoCurse">
                        <div class="videoCurseImg">
                            <img src="/images/course.jpg" class="img-responsive"/>
                        </div>
                        <div class="videoCurseDesc">
                            <div class="videoCurseTitle">
                                Курс №1
                            </div>
                            <p>Описание курса</p>
                        </div>
                    </div>
                    <div class="videoCurse">
                        <div class="videoCurseImg">
                            <img src="/images/course.jpg" class="img-responsive"/>
                        </div>
                        <div class="videoCurseDesc">
                            <div class="videoCurseTitle">
                                Курс №1
                            </div>
                            <p>Описание курса</p>
                        </div>
                    </div>
                    <div class="videoCurse">
                        <div class="videoCurseImg">
                            <img src="/images/course.jpg" class="img-responsive"/>
                        </div>
                        <div class="videoCurseDesc">
                            <div class="videoCurseTitle">
                                Курс №1
                            </div>
                            <p>Описание курса</p>
                        </div>
                    </div>
                    <div class="videoCurse">
                        <div class="videoCurseImg">
                            <img src="/images/course.jpg" class="img-responsive"/>
                        </div>
                        <div class="videoCurseDesc">
                            <div class="videoCurseTitle">
                                Курс №1
                            </div>
                            <p>Описание курса</p>
                        </div>
                    </div> <div class="videoCurse">
                        <div class="videoCurseImg">
                            <img src="/images/course.jpg" class="img-responsive"/>
                        </div>
                        <div class="videoCurseDesc">
                            <div class="videoCurseTitle">
                                Курс №1
                            </div>
                            <p>Описание курса</p>
                        </div>
                    </div>

                    <div class="videoCurse">
                        <div class="videoCurseImg">
                            <img src="/images/course.jpg" class="img-responsive"/>
                        </div>
                        <div class="videoCurseDesc">
                            <div class="videoCurseTitle">
                                Курс №1
                            </div>
                            <p>Описание курса</p>
                        </div>
                    </div>
-->
            </div>
        </div>
    </div>

@endsection
