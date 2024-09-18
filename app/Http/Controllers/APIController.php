<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function products(){
    return response()->json(["data"=>Product::all()]);
    }
    public function categories(){
        return response()->json(Category::all());
        }
}
