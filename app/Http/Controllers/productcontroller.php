<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function index(){
        return view('product/category');
    }

    public function productview(){
        return view('product/singleproduct');
    }

    public function productcheckout(){
        return view('product/productcheckout');
    }
}
