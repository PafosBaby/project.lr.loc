<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function mainPage(){
        return view('main-page');
    }

    public function blogPage(){
        return view('blog-page');
    }

}
