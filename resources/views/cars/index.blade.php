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
            <td>
              <a href="{{ route('cars.show', ['car'=>$auto->id])}}" class="btn btn-info">Dettagli</a>
              <a href="{{ route('cars.edit', ['car'=>$auto->id])}}" class="btn btn-warning">Modifica</a>
              <form action="{{ route('cars.destroy', $auto->id) }}" method="post" class="d-inline-block">
                @csrf
                @method('delete')
                <button class="btn btn-danger">Cancella</button>
              </form>
            </td>
        </tr>    
        @endforeach
    </tbody>
  </table>
  <a href="{{ route('cars.create') }}">Inserisci un nuovo prodotto</a>
@endsection