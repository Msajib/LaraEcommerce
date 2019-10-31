<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use\App\Models\Category;

class CategoriesController extends Controller
{
    public function index(){
      $categories = Category::orderBy('id','desc')->get();
      return view('backend.pages.categories.index',compact('categories'));
    }
}
