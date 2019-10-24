<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AdminPagesController extends Controller
{
    public function index()
    {
      return view('admin.pages.index');
    }
    public function product_create()
    {
      return view('admin.pages.product.create');
    }
    public function product_store(Request $request)
    {
      $product = new Product;
      $product->title = $request->pTitle;
      $product->description = $request->pDescription;
      $product->price = $request->pPrice;
      $product->quantity = $request->pQuantity;
      $product->slug = str_slug($request->pTitle);

      $product->category_id = 1;
      $product->brand_id = 1;
      $product->admin_id = 1;
      $product->save();

      return redirect()->route('admin.product.create');
    }
}
