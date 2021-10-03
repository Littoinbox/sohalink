@extends('layouts.main')

@section('content')
    <div class="eventBlog">
        <h1>{{$element->title}}</h1>
            <img src="/storage/{{$element->image}}" class="img-responsive">


        {!! $element->description !!}
    </div>
@endsection
