@extends('layouts.app')

@section('title', 'gestione automobili')
    
@section('content')
<h1>Scegli l'automobile</h1>
<div class="container">
    <form action="" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="inputBrand">Marca</label>
          <input type="text" class="form-control" id="inputBrand" name="brand" value="{{ $automobile->brand }}">
        </div>
        <div class="form-group">
          <label for="inputModel">Modello</label>
          <input type="text" class="form-control" id="inputModel" name="model" value="{{ $automobile->model }}">
        </div>
        <div class="form-group">
            <label for="inputColor">Colore</label>
            <input type="text" class="form-control" id="inputColor" name="color" value="{{ $automobile->color }}">
        </div>
        <div class="form-group">
            <label for="inputPrice">Prezzo</label>
            <input type="text" class="form-control" id="inputPrice" name="price" value="{{ $automobile->price }}">
        </div>
        <div class="form-group">
            <label for="inputDescription">Descrizione</label>
            <textarea class="form-control" id="inputDescription"  rows="3" name="description">{{ $automobile->description }}</textarea>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection