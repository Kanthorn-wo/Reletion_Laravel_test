<?php

namespace App\Http\Controllers;

use App\Models\Product;

class OtherController extends Controller
{
    public function index()
    {
        $product_data = Product::all();
        return view('other', compact('product_data'));
    }
}
