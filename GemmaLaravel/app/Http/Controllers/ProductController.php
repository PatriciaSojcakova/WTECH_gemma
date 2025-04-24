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

        // Ak je prítomná 'category_id', pridaj filter na túto kategóriu
        if ($request->filled('category_id')) {
            $query->whereHas('subcategory', function ($subquery) use ($request) {
                $subquery->where('category_id', $request->category_id);
            });
        }

        // Ak je prítomná 'subcategory_id', filtrovanie podľa subkategórie
        if ($request->filled('subcategory_id')) {
            $query->where('subcategory_id', $request->subcategory_id);
        }

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

        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        if ($request->filled('sort') && in_array($request->sort, ['asc', 'desc'])) {
            $query->orderBy('price', $request->sort);
        }

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->whereRaw('name ILIKE ?', ['%' . $request->search . '%'])
                    ->orWhereRaw('description ILIKE ?', ['%' . $request->search . '%']);
            });
        }





        $products = $query->with('subcategory')->paginate(12)->withQueryString();

        return view('main_pages.all_products_page', compact('products'));
    }



    public function show($id){
        $product = Product::find($id);
        $images = $product->image;
        $moreProducts = Product::inRandomOrder()->limit(8)->get();
        $moreImages = $moreProducts->pluck('image');
        return view('main_pages.one_product_page', compact('product', 'images', 'moreProducts', 'moreImages'));
    }

    public function home()
    {
        $randomProducts = Product::inRandomOrder()->limit(8)->get();
        $images = $randomProducts->pluck('image');
        return view('main_pages.main_page', compact('randomProducts','images'));
    }

}
