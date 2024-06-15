@extends('layouts.app')
@section('content')
<div class="container">
    <h1>
        Lista dei fumetti
    </h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">titolo</th>
                <th scope="col">tipologia</th>
                <th scope="col">azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listaFumetti as $item )
               <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->title }}</td>
                <td>{{ $item->type }}</td>
                <td><a href="{{route('comics.show',['comic'=>$item->id])}}">Dettagli</a></td>
            </tr>    
            @endforeach
         
        </tbody>
    </table>
</div>
@endsection