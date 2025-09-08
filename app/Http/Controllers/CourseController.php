<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Fonction index qui charge la vue 'course'
    public function index()
    {
        return view('course');
    }


}
