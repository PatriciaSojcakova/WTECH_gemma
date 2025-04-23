<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        // Filtrovanie podľa GET parametrov
        if ($request->filled('material')) {
            $query->where('material', $request->material);
        }

        if ($request->filled('stone_color')) {
            $query->where('stone_color', $request->stone_color);
        }

        if ($request->filled('purpose')) {
            $query->where('purpose', $request->purpose);
        }

        if ($request->filled('subcategory_id')) {
            $query->where('subcategory_id', $request->subcategory_id);
        }

        // Načítaj produkty s pagináciou a eager loading pre podkategóriu
        $products = $query->with('subcategory')->paginate(12)->withQueryString();

        return view('main_pages.all_products_page', compact('products'));
    }

}
