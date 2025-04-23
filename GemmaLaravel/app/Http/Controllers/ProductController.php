<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(12);
        return view('main_pages.all_products_page', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('main_pages.product_show', compact('product'));
    }
}
