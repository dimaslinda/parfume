<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function products()
    {
        return view('products');
    }

    public function detailproducts()
    {
        return view('detailproducts');
    }
}
