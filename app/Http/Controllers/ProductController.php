<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function productDetails(){
        return view('products.product-details');
    }
    public function show($id)
    {
        $userData = Product::find($id);
        return view('products.product-details',compact('userData'));
    }
}
