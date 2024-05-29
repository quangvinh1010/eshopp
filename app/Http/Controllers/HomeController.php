<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $productList = Product::all();
        return view('home.index', ['productList' => $productList]);
        // $productListHome = Product::paginate(8);
        // return view('home.index', ['productList' => $productListHome]);
    }

   
}
