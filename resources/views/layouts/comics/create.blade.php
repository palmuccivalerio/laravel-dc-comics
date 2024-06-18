@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Crea/aggiungi un nuovo fumetto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.store') }}" method="POST">
      {{-- Cookie per far riconoscere il form al server --}}
      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <select class="form-select" id="type" name="type">
          <option value="">Seleziona</option>
          <option value="anime" {{ old('type') == 'anime' ? 'selected' : '' }}>anime</option>
          <option value="azione" {{ old('type') == 'azione' ? 'selected' : '' }}>azione</option>
          <option value="fantasy" {{ old('type') == 'fantasy' ? 'selected' : '' }}>fantasy</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Image</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
      </div>

      <div class="mb-3">
        <label class="form-label" for="sale_date">Data di Vendita</label>
        <input type="date" id="sale_date" name="sale_date" class="form-control" value="{{ old('sale_date') }}">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
      </div>

      <button class="btn btn-success" type="submit">Salva</button>
    </form>
  </div>
@endsection
