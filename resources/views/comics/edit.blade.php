@extends('layouts.app')

@section('content')
<main id="home">
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <div class="">
                <h2 class="fw-bold">INSERISCI UN NUOVO FUMETTO</h2>
                <a href="{{ route('comic.index')}}"  class="label">VEDI TUTTI I NOSTRI FUMETTI</a>
            </div>
        </div>
        <div>
            <div class="col-12 d-flex justify-content-center ">
                <form action="{{ route('comic.update', $comic->id)}}" method="POST" class="col-6">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label class="control-label">Titolo</label>
                        <input type="text" id="title" class="form-control" placeholder="Titolo" name="title" value="{{ old('title') ?? $comic->title }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Descrizione</label>
                        <input type="text" id="description" class="form-control" placeholder="Descrizione" name="description" value="{{ old('description') ?? $comic->description }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Copertina online</label>
                        <input type="url" id="thumb" class="form-control" placeholder="Copertina online" name="thumb" value="{{ old('thumb') ?? $comic->thumb }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Copertina online</label>
                        <input type="url" id="thumb2" class="form-control" placeholder="Copertina online" name="thumb2" value="{{ old('thumb2') ?? $comic->thumb2 }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Copertina locale</label>
                        <input type="text" id="cover_image" class="form-control" placeholder="Copertina locale" name="cover_image" value="{{ old('cover_image') ?? $comic->cover_image }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Prezzo in €</label>
                        <input type="text" id="price" class="form-control" placeholder="0.00€" name="price" value="{{ old('price') ?? $comic->price }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Serie</label>
                        <input type="text" id="series" class="form-control" placeholder="Serie" name="series"value="{{ old('series') ?? $comic->series }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Data uscita</label>
                        <input type="date" id="sale_date" class="form-control" placeholder="Data uscita" name="sale_date"value="{{ old('sale_date') ?? $comic->sale_date }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Tipo</label>
                        <input type="text" id="type" class="form-control" placeholder="Tipo" name="type"value="{{ old('type') ?? $comic->type }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Artisti</label>
                        <input type="text" id="artists" class="form-control" placeholder="Artisti, separati da una virgola" name="artists"value="{{ old('artists') ?? $comic->artists }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label class="control-label">Scrittori</label>
                        <input type="text" id="writers" class="form-control" placeholder="Scrittori, separati da una virgola" name="writers"value="{{ old('writers') ?? $comic->writers }}" required>
                    </div>
                    <div class="d-flex">
                        <button class="label align-self-center" type="submit" > Modifica </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection