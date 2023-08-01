@extends('layouts.app')

@section('mainpagecontent')
    <main id="home">
        <div id="jumbotron">

        </div>
        <div class="container">
            <div class="section_label label">
                <h2>CURRENT SERIES</h2>
            </div>
            <div class="content">
            @for($i = 0; $i< 12; $i++)
                    <a href="{{ route('comic.show', $i+1)}}" class="comic">
                        <div class="cover">
                            <img src="{{ $comics[$i]->thumb }}" alt="{{ $comics[$i]->series }}">
                        </div>
                        <h5>{{ $comics[$i]->series}}</h5>
                    </a>
            @endfor
            </div>
            <div class="center">
                <button class="label">LOAD MORE</button>
            </div>
        </div>
    </main>
    <footer>
        <section id="shops">
                    <div class="container">
                    @foreach($shops as $shop)
                        <a href="shop.url" class="shop_card">
                            <img src="{{ Vite::asset($shop['icon']) }}" alt="{{ $shop['name'] }}">
                            <p>{{ $shop['name']}}</p>
                        </a>
                    @endforeach
                    </div>
        </section>
    </footer>
@endsection