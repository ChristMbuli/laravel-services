@extends('layouts.app')

@section('content')
<h1>Liste des produits</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Images</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->title }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td><img src="{{ $product->images }}" alt="Product Image" width="100" height="100"></td>
            <td>
                <!-- Lien pour modifier le produit -->
                <a href="{{ route('products.edit', $product->id) }}">Modifier</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
