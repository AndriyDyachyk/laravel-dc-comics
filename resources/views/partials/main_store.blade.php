@extends('layout.app')

@section('mainshop')
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
@endsection