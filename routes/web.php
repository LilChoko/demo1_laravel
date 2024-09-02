<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

//Ruta hacia el directorio raiz en este caso funcion home
Route::get('/', [SiteController::class, 'index']);
//Ruta hacia Products
Route::get('/products', [SiteController::class, 'products']);
//Ruta hacia Product Details
Route::get('/product_details/{id}', [SiteController::class, 'product_details']);
//Ruta hacia Cart
Route::get('/cart', [SiteController::class, 'cart']);

Route::get('/profile/{username}', [SiteController::class, 'profile']);
