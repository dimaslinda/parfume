<?php

namespace App\Http\Controllers;

use Spatie\Tags\Tag;
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
        $products = Product::with('media')->paginate(8);
        $tags = Tag::all();
        return view('products', compact('products', 'tags'));
    }

    public function detailproducts($slug)
    {
        $produk = Product::where('slug', $slug)->first();

        $tags = $produk->tags->pluck('name');

        if($tags) {
            $kategoriproducts = Product::with('media', 'tags')->withAnyTagsOfAnyType($tags)->paginate(3);
        } else {
            $kategoriproducts = Product::with('media', 'tags')->orderBy('id', 'desc')->paginate(3);
        }

        $detailproducts = Product::with('media', 'tags')->where('slug', $slug)->first();
        return view('detailproducts', compact('detailproducts', 'kategoriproducts'));
    }

    public function mitra()
    {
        return view('mitra');
    }
}
