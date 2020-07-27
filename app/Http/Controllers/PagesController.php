<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('/index');
    }

    function aboutUs(){
        return view('/about_us');
    }

    function service(){
        return view('/service');
    }

    function news(){
        return view('/news');
    }

    function products(){
        return view('/products');
    }
}
