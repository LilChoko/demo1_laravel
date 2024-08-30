<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
      //return "<h1>Mi Controlador - Bienvenido a Laravel</h1>";
      return view ('index');
    }

    public function profile($username)
    {axz nzmxz z
        //echo $username;
      return view ('profile', ['username' => $username]);
    }
}
