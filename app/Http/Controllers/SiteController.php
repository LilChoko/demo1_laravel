<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SiteController extends Controller
{
    public function index()
    {
      return view ('e-commerce.index');
    }

    public function products()
    {
            $products = Product::all();
            //dd($products);
            //return view ('e-commerce.products', ['products'=>$products]);
            return view ('e-commerce.products', compact('products'));
    }

    public function profile($username)
    {
        //echo $username;
      return view ('profile', ['username' => $username]);
    }
}
