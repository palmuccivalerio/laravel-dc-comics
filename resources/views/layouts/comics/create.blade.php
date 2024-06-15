@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Crea/aggiungi  un nuovo fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
      {{-- Cookie per far riconoscere il form al server --}}
      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <select class="form-select" id="type" name="type">
          <option selected>Seleziona</option>
          <option value="lunga">anime</option>
          <option value="corta">azione</option>
          <option value="cortissima">fantasy</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" id="price" name="price">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">serie</label>
        <input type="text" class="form-control" id="series" name="series">
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Image</label>
        <input type="text" class="form-control" id="thumb" name="thumb">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      </div>

      <button class="btn btn-success" type="submit">Salva</button>
    </form>
  </div>
@endsection