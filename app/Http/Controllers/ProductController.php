<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;

        // Almacena las especificaciones como JSON
        $product->specifications = json_encode($request->specifications);
        //$product->description = $request->input('description');
        $product->save();

        return redirect()->route('products.index')->with('success', 'Producto creado con éxito');

        $request->validate([
            'name' => 'required|string|max:255',
            'specifications' => 'nullable|array',  // Asegura que sea un array
            'specifications.*' => 'string|max:255',  // Cada especificación debe ser una cadena
            //'description' => 'required|string|max:255',
        ]);
    }

    public function show($id)
    {
        // Cargar el producto con las reseñas asociadas
        $product = Product::with('reviews')->findOrFail($id);

        // Debug: Verificar si las reseñas están siendo cargadas
        dd($product->reviews);

        return view('product_details', compact('product'));
    }



}
