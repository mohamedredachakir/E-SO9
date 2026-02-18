<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = \App\Models\Product::with('category')->latest()->get();
        return view('products.index', compact('products'));
    }

    public function show(\App\Models\Product $product)
    {
        return view('products.show', compact('product'));
    }
}
