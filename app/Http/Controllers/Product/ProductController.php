<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index()
    {
        $data = Product::paginate(6);

        return view('products.index', ['products' => $data]);
    }

    public function detail($id)
    {
        $product = Product::find($id);
        return view('products.detail', ['product' => $product]);
    }
}
