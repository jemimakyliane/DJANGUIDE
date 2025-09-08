<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Fonction index qui charge la vue 'home'
    public function index()
    {
        return view('blog');
    }


}
