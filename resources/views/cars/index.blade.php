@extends('layouts.app')

@section('title','Automobili')

@section('content')
 <h1>Automobili</h1>
 <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Brand</th>
        <th scope="col">Model</th>
        <th scope="col">Color</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($automobile as $auto)
        <tr>
            <th scope="row">{{ $auto->id }}</th>
            <td>{{ $auto->brand }}</td>
            <td>{{ $auto->model }}</td>
            <td>{{ $auto->color }}</td>
            <td><a href="{{ route('cars.show', ['car'=>$auto->id])}}">Dettagli</a></td>
        </tr>    
        @endforeach
    </tbody>
  </table>
  <a href="{{ route('cars.create') }}">Inserisci un nuovo prodotto</a>
@endsection