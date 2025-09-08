<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Fonction index qui charge la vue 'home'
    public function index()
    {
        return view('home');
    }

     public function faq()
    {
        return view('faq');
    }
    
    public function terms()
    {
        return view('terms');
    }

}
