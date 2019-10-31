<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\ProductImage;
use Image;
class ProductController extends Controller
{
    public function index()
    {
      $products = Product::orderBy('id','desc')->get();
      return view('backend.pages.product.index')->with('products', $products);
    }
    public function create()
    {
      return view('backend.pages.product.create');
    }

    public function edit($id)
    {
      $product = Product::find($id);
      return view('backend.pages.product.edit')->with('product', $product);
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
    $product = Product::find($id);
    if(!is_null($product)){
      $product->delete();
    }
    session()->flash('success','Product has deleted Successfully !!');
    return back();
    }
}

//php artisan config:cache
//php artisan view:clear
//composer dump-autoload
