@extends('layouts.app')

@section('title','Dettagli automobili')

@section('content')
 <h1>Automobili</h1>
 <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Brand</th>
        <th scope="col">Model</th>
        <th scope="col">Color</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($automobile as $auto)
        <tr>
            <th scope="row">{{ $auto->id }}</th>
            <td>{{ $auto->brand }}</td>
            <td>{{ $auto->model }}</td>
            <td>{{ $auto->color }}</td>
            <td>{{ $auto->price }}</td>
            <td>{{ $auto->description }}</td>
        </tr>    
        @endforeach
    </tbody>
  </table>
  </table>
@endsection