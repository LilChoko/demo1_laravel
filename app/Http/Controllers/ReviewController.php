<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, $productId)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'rating' => 'required|integer|min:1|max:5',
        'review' => 'required|string',
    ]);

    $review = new Review();
    $review->product_id = $productId; // Relaciona la reseña con el producto
    $review->name = $request->name;
    $review->email = $request->email;
    $review->rating = $request->rating;
    $review->review = $request->review;
    $review->save();

    return redirect()->back()->with('success', 'Reseña enviada con éxito');
}

}
