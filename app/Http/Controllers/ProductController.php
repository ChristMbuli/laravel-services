<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class ProductController extends Controller
{
    public function index()
    {
        // Récupérer tous les produits
        $products = Product::all();

        // Rendre la vue index.blade.php avec les produits
        return view('products.index', ['products' => $products]);
    }
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        dd($request->all());

        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = new Product($request->all());

        // Téléchargez l'image sur Cloudinary et obtenez l'URL
        if ($request->hasFile('images')) {
            $result = Cloudinary::upload($request->file('images')->getRealPath());
            $product->images = $result->getSecurePath();
        }

        $product->save();
        return redirect()->route('products.index');
    }

    public function update(Request $request, Product $product)
    {
        // Valider les données soumises
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        // Mettre à jour les champs 'title', 'description' et 'price'
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        // Enregistrer les modifications
        $product->save();

        // Rediriger vers l'index des produits avec un message de succès
        return redirect()->route('products.index')->with('success', 'Produit mis à jour avec succès');
    }



    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        // Récupérer le produit à éditer
        $product = Product::findOrFail($id);

        // Rendre la vue d'édition et passer le produit à la vue
        return view('products.edit', compact('product'));
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}