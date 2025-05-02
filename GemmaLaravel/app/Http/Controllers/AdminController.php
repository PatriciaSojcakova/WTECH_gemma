<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $subcategories = Subcategory::all();

        return view('main_pages.admin_account', compact('products', 'categories', 'subcategories'));
    }

    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();

        return view('main_pages.admin_account', compact('categories', 'subcategories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'material' => 'nullable|string|max:255',
            'stone_color' => 'nullable|string|max:255',
            'purpose' => 'required|in:muži,ženy,unisex',
            'quantity' => 'nullable|integer|min:0',
            'price' => 'required|numeric',
            'subcategory_id' => 'required|exists:subcategories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('image/uploads'), $imageName);

        $product = Product::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'material' => $validated['material'] ?? null,
            'stone_color' => $validated['stone_color'] ?? null,
            'purpose' => $validated['purpose'] ?? null,
            'quantity' => $validated['quantity'] ?? 0,
            'price' => $validated['price'],
            'subcategory_id' => $validated['subcategory_id'],
        ]);

        ProductImage::create([
            'id_product' => $product->id,
            'path' => 'uploads/' . $imageName,
        ]);

        if ($product) {
            return back()->with('success', 'Produkt bol úspešne pridaný!');
        } else {
            return back()->with('error', 'Produkt sa nepodarilo pridať.');
        }
    }

    public function deleteProduct(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
        ]);

        $deleted = Product::where('id', $request->product_id)->delete();

        if ($deleted) {
            return redirect()->back()->with('delete_success', 'Produkt bol úspešne odstránený.');
        } else {
            return redirect()->back()->with('delete_error', 'Produkt s daným ID nebol nájdený.');
        }
    }




    public function showProduct(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
        ]);

        $info_product = Product::find($request->input('id'));

        if (!$info_product) {
            return redirect()
                ->route('admin.dashboard')
                ->with('error', 'Produkt s týmto ID neexistuje.');
        }

        $products = Product::all();
        $categories = Category::all();
        $subcategories = Subcategory::all();

        return view('main_pages.admin_account', compact('products', 'categories', 'subcategories', 'info_product'))
            ->with('success', 'Produkt bol nájdený.');
    }





}
