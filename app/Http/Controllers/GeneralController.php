<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        $products = Product::with('media')->paginate(8);
        $bestdeal = Product::with('media')->where('bestdeal', 1)->paginate(4);
        return view('index', compact('products', 'bestdeal'));
    }

    public function products()
    {
        return view('products');
    }

    public function detailproducts($slug)
    {
        $detailproducts = Product::with('media')->where('slug', $slug)->first();
        return view('detailproducts', compact('detailproducts'));
    }
}
