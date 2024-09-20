<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function products($category_id = null)
    {
        $products = is_null($category_id)?
                    Product::with("category")->get():
                    Product::with("category")->where('category_id', $category_id)->get();

        return response()->json(["data" =>$products]);
    }
    public function categories(Request $request)
    {
        $categoryName = $request->input("term");
        $categories = is_null($categoryName)?
                        Category::select('id', 'name as text')->get():
                        Category::where('name', 'like', '%' . $categoryName . '%')->select('id', 'name as text')->get();
        return response()->json(["results" => $categories]);
    }
}
