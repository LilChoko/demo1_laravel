<?php

use App\Http\Controllers\AdminProductsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
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
//Ruta hacia My Account
Route::get('/myaccount', [SiteController::class, 'myaccount'])->name('myaccount');
//Ruta hacia Checkout
Route::get('/checkout', [SiteController::class, 'checkout'])->name('checkout');
//Ruta hacia Contact Us
Route::resource('/contact', ContactController::class);
//Ruta hpara almacenar reseñas
Route::post('products/{product}/reviews',
[ReviewController::class, 'store'])->name('reviews.store');

Route::get('/admin/products',[AdminProductsController::class, 'index'])->name('admin.products');





//RUTAS DE EJEMPLO
Route::get('/productBycategory', [SiteController::class, 'productBycategory'])->name('productBycategory');
Route::get('/profile/{username}', [SiteController::class, 'profile']);
Route::resource('products', ProductController::class);
