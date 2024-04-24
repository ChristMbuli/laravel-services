@extends('layouts.app')

@section('content')
<div class="container">
    <div className=" text-center">
        <h2 class="text-center">Modifier un article</h2>
        
      </div>


    <form action="{{ route('products.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" value="{{ $product->title }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ $product->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" name="price" id="price" value="{{ $product->price }}" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="images">Images</label>
            <input type="file" name="images" id="images" class="form-control">
            <img src="{{ $product->images }}" alt="Image actuelle du produit" class="img-thumbnail mt-2" width="200">
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
