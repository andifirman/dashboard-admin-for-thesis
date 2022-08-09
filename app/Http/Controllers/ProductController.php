<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
  public function get_all_products_for_pie_chart()
  {
    $products = \App\Models\Product::all();
    return view('pie',compact('products')); 
  }
}
