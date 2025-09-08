<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Fonction index qui charge la vue 'home'
    public function index()
    {
        return view('login');
    }


}
