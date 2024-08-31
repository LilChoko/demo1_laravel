<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class SiteController extends Controller
{
    //Funcion para mostrar /home
    public function index()
    {
      return view ('e-commerce.index');
    }

    //Funcion para mostrar /products
    public function products()
    {
            $products = Product::all();
            //dd($products);
            //return view ('e-commerce.products', ['products'=>$products]);
            return view ('e-commerce.products', compact('products'));
    }

    //Funcion para mostrar /cart
    public function cart()
    {
        $carts = Cart::all();
        return view ('e-commerce.cart', compact('carts'));
    }

    public function profile($username)
    {
        //echo $username;
      return view ('profile', ['username' => $username]);
    }
}
