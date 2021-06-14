<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function layout(){
        return view('frontend.layout');
    }

    public function navigatie() {

        $navbar = 'navbar';

        return view('frontend.navigatie', compact('navbar'));

    }

}
