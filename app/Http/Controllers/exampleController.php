<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exampleController extends Controller
{
    public function homepage(){
        return view('homepage');
    }

    public function aboutPage(){
        return '<h1>About Page</h1><a href="/">Back to home</a>'; 
    }
}
