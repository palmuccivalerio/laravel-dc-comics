@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifica fumetto</h1>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <select class="form-select" id="type" name="type">
                <option value="" disabled>Seleziona</option>
                <option value="anime" {{ old('type', $comic->type) == 'anime' ? 'selected' : '' }}>anime</option>
                <option value="azione" {{ old('type', $comic->type) == 'azione' ? 'selected' : '' }}>azione</option>
                <option value="fantasy" {{ old('type', $comic->type) == 'fantasy' ? 'selected' : '' }}>fantasy</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $comic->price) }}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $comic->series) }}">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
        </div>

        <div class="mb-3">
            <label class="form-label" for="sale_date">Data di vendita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $comic->description) }}</textarea>
        </div>

        <button class="btn btn-success" type="submit">Salva</button>
    </form>
</div>
@endsection
