@extends('layouts.app')

@section('comicindex')
    <div id="jumbotron">

    </div>
    <div class="container">
        <div class="section_label label">
            <h2>ALL OUR COMICS</h2>
        </div>
        <div class="section_label label">
            <a href="{{route('comic.create')}}" style="color:white"><h2>-> ADD A NEW COMIC <-</h2></a>
        </div>
        <div class="content">
        @foreach($comics as $comic->index => $comic)
            <a href="{{ route('comic.show', $comic->index+1)}}" class="comic">
                <div class="cover">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}}">
                </div>
                <div>
                    
                </div>
                <h5>{{ $comic['series']}}</h5>
            </a>
        @endforeach
        </div>
        <div class="center">
            <button class="label">LOAD MORE</button>
        </div>
    </div>
@endsection