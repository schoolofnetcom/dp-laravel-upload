<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function upload(Request $request)
    {
        $product = Product::create($request->all());
        dd('tudo pronto');
    }
}
