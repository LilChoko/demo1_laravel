<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Checkout;
use App\Models\MyAccount;

class SiteController extends Controller
{
    //Funcion para mostrar /home
    public function index()
    {
      return view ('e-commerce.index');
    }

    //Funcion para mostrar /products
    public function products($category_id = null)
    {
            $products = (is_null($category_id))?
                        Product::paginate(15):
                        Product::where('category_id', $category_id)->paginate(5);
            $categories = Category::all();
            return view ('e-commerce.products', compact('products', 'categories'));
    }

    //Funcion para mostrar /product_details
    public function product_details($id)
    {
            $product = Product::find($id);
            return view ('e-commerce.product_details', compact('product'));
    }


    //Funcion para mostrar /cart
    public function cart()
    {
        $carts = Cart::all();
        return view ('e-commerce.cart', compact('carts'));
    }

    //Funcion para mostrar /myaccount
    public function myaccount()
    {
        $myaccounts = MyAccount::all();
        return view ('e-commerce.myaccount', compact('myaccounts'));
    }
    //Funcion para mostrar /checkout
    public function checkout()
    {
        $checkouts = Checkout::all();
        return view ('e-commerce.checkout', compact('checkouts'));
    }

    public function productBycategory(){
        //$cat = Category::find(1);
        //$products = $cat->products;
        //$products = Category::find(1)->products;
        //dd($products);
        //die();
        $categories = Category::all();
        return view('e-commerce.products_by_category',compact('categories'));
    }
}
