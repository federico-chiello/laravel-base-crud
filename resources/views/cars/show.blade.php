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
        <tr>
            <th scope="row">{{ $automobile->id }}</th>
            <td>{{ $automobile->brand }}</td>
            <td>{{ $automobile->model }}</td>
            <td>{{ $automobile->color }}</td>
            <td>{{ $automobile->price }}</td>
            <td>{{ $automobile->description }}</td>
        </tr>    
    </tbody>
  </table>
  </table>
@endsection