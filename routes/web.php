<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [SiteController::class, 'index']);
Route::get('/profile/{username}', [SiteController::class, 'profile']);

Route::get('/greeting', function () {
    return 'Hello World';
});

/*
Nos pide un nombre de usuario
Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
});
*/

Route::get('/user/{name?}', function (?string $name = null) {
    return 'Leito' .$name;
});

/*
Route::get('/user/{name?}', function (?string $name = 'John') {
    return $name;
});
*/
