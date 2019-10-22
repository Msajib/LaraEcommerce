<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('layout/index');
    }
    public function contact(){
        return view('layout/contact');
    }
}
