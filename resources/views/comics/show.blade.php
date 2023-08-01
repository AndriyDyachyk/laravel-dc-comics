@extends('layouts.app')

@section('comicpagecontent')
    <main id="comic">
        <div id="jumbotron2">
            <div class="container">
                <div class="section_label_img label2">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                </div> 
            </div>
        </div>
        <!-- main content section -->
        <!-- comic -->
        <div class="container main_section">
            <!-- description -->
            <div class="row">
                <div class="content">
                    <h3>{{ $comic['title']}}</h3>
                    <div class="row up_sale">
                        <div class="price">
                            <p>U.S. Price: <span style="color:white">{{ $comic['price']}}</span></p>
                            <span>AVAIABLE</span>
                        </div>
                        <div class="availability">
                            <p>Check Avaiability &#9660;</p>
                        </div>
                    </div>
                    <p class="description">{{ $comic['description']}}</p>
                </div>
                <!-- ad space -->
                <div class="adv">
                    <label for="adv">ADVERTISEMENT</label>
                    <a href=" {{ route('home') }}">
                        <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="advertisement" name="adv">
                    </a>
                </div>
            </div>
        </div>
        <!-- other specifications -->
        <div id="other">
            <div class="container">
                <div class="row">
                    <!-- talent section -->
                    <div class="talent">
                        <div class="divider">
                            <h4>Talent</h4>
                        </div>
                        <div class="divider">
                            <div class="subtitle">
                                <p>Art by:</p>
                            </div>
                            <div class="content">
                                
                                <a href="">{{ $comic->artists }}</a>
                                
                            </div>
                        </div>
                        <div class="divider">
                            <div class="subtitle">
                                <p>Written by:</p>
                            </div>
                            <div class="content">
                            <a href="">{{ $comic->writers }}</a>
                            </div>
                        </div>
                    </div>
                    <!-- comic specs section -->
                    <div class="specs">
                        <div class="divider">
                            <h4>Specs</h4>
                        </div>
                        <div class="divider">
                            <div class="subtitle">
                                <p>Series:</p>
                            </div>
                            <div class="content">
                                <a href="">{{ $comic['series']}}</a>
                            </div>
                        </div>
                        <div class="divider">
                            <div class="subtitle">
                                <p>U.S. Price:</p>
                            </div>
                            <div class="content">
                                <p>{{ $comic['price']}}</p>
                            </div>
                        </div>
                        <div class="divider">
                            <div class="subtitle">
                                <p>On Sale Date:</p>
                            </div>
                            <div class="content">
                                <p>{{date('M d Y', strtotime($comic['sale_date']))}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <section id="secondaryshops">
                    <div class="container">
                    @foreach($shops as $shop)
                        <a href="shop.url" class="shop_card">
                            <p>{{ $shop['name']}}</p>
                            <img src="{{ Vite::asset($shop['icon']) }}" alt="{{ $shop['name'] }}">
                        </a>
                    @endforeach
                    </div>
        </section>
    </footer>
@endsection
