<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Image;
use App\ProductImage;
class AdminProductController extends Controller
{
    public function index()
    {
      $products = Product::orderBy('id','desc')->get();
      return view('admin.pages.product.index')->with('products', $products);
    }
    public function create()
    {
      return view('admin.pages.product.create');
    }

    public function edit($id)
    {
      $product = Product::find($id);
      return view('admin.pages.product.edit')->with('product', $product);
    }
    public function store(Request $request)
    {
      $request->validate([
        'pTitle' => 'required|max:150',
        'pDescription' => 'required',
        'pPrice' => 'required|numeric',
        'pQuantity' => 'required|numeric'

      ]);

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

      //ProductImage Model inser Image
// Single Image Upload
      // if($request->hasFile('pImage')){
      //   // Insert Image
      //   $image = $request->file('pImage');
      //   $img = time().'.'. $image->getClientOriginalExtension();
      //   $location = public_path('images/Products/'.$img);
      //   Image::make($image)->save($location);
      //
      //   $product_image = new ProductImage;
      //   $product_image->product_id = $product->id;
      //   $product_image->image = $img;
      //   $product_image->save();
      // }
// MultyImage Upload
      if(count($request->pImage) > 0){
        foreach ($request->pImage as $image) {
          // Insert Image
          $img = time().'.'. $image->getClientOriginalExtension();
          $location = public_path('images/Products/'.$img);
          Image::make($image)->save($location);

          $product_image = new ProductImage;
          $product_image->product_id = $product->id;
          $product_image->image = $img;
          $product_image->save();
        }
      }
      if(count($request->pImage) > 0){

      }

      return redirect()->route('admin.product.create');
    }
    public function update(Request $request,$id)
    {
      $request->validate([
        'pTitle' => 'required|max:150',
        'pDescription' => 'required',
        'pPrice' => 'required|numeric',
        'pQuantity' => 'required|numeric'

      ]);

      $product = Product::find($id);
      $product->title = $request->pTitle;
      $product->description = $request->pDescription;
      $product->price = $request->pPrice;
      $product->quantity = $request->pQuantity;


      $product->save();


      return redirect()->route('admin.products');
    }
    public function delete($id){

    }
}
