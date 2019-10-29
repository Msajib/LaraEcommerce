<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Image;
use App\ProductImage;
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

      //ProductImage Model inser Image

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
      if(count($request->pImage) > 0){
        foreach ($request->pImage as $image) {
          // Insert Image
          $image = $request->file('pImage');
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
}
