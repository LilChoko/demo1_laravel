<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

//Ruta hacia el directorio raiz en este caso funcion home
Route::get('/', [SiteController::class, 'index'])->name('home');
//Ruta hacia Products
Route::get('/products/{category_id?}', [SiteController::class, 'products'])->name('products');
//Ruta hacia Product Details
Route::get('/product_details/{id}', [SiteController::class, 'product_details'])->name('product_details');
//Ruta hacia Cart
Route::get('/cart', [SiteController::class, 'cart'])->name('cart');

Route::get('/profile/{username}', [SiteController::class, 'profile']);


//RUTA EJEMPLO
Route::get('/productBycategory', [SiteController::class, 'productBycategory'])->name('productBycategory');
