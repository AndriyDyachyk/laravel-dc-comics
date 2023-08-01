@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            @forelse($comics as $comic)
                <div class="col-12 col-md-6 col-lg-4">
                        <img class="card-img-top" src="{{$comic->thumb}}" onerror="this.onerror=null;this.src='{{$comic->thumb2}}';" alt="{{$comic->title}}">
                    <div class="card">
                        <div class="card-body">
                            <h4>{{$comic->title}}</h4>
                            <p>Serie: {{$comic->series}}</p>
                            <p>Prezzo: {{$comic->price}}</p>
                            <p>Tipo: {{$comic->type}}</p>
                            <p>Sata di uscita: {{$comic->sale_date}}</p>
                            <p>Descrizione:<br>{{$comic->description}}</p>
                            <p>Artisti:<br>{{$comic->artists}}</p>
                            <p>Scrittori:<br>{{$comic->writers}}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="12">
                    <p>Sorry no comics found</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
