<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class StoreController extends Controller
{
    // Index
    public function index(){
        $products = Product::all();
        // dd($products); debug
        return view('store.index', compact('products')); // vista alojada en store/index y se le pasan los productos
    }
    // Show
    public function show($idp){
        $product = Product::where('id', $idp)->first();
         //dd($products); 
        return view('store.show', compact('product')); // vista alojada en store/show y se le pasan los productos
    }
}
