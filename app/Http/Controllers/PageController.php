<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("mainPage");
    }

    public function about(){
        return view("AboutStore");
    }

    public function contact(){
        return view("contact");
    }

    public function katalog(){
        return view("product");
    }

    public function admin(){
        return view("admin.index");
    }

    public function edit(){
        return view("admin.edit");
    }
}

