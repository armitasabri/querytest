<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdertrackingController extends Controller
{
    public function index(){
        return view('product/tracking');
    }
}
