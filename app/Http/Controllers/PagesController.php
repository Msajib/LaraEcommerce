<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PagesController extends Controller
{
    public function index(){
        return view('layout.index');
    }
    public function contact(){
        return view('layout.contact');
    }
    public function products(){
      $products = Product::orderBy('id','desc')->get();
        return view('layout.product.index')->with('products',$products);
    }
}
