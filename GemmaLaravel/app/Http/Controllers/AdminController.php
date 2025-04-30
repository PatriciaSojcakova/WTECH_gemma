<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Zoznam produktov + formulár na pridanie
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $subcategories = Subcategory::all(); // <- Dôležité, inak bude chyba

        return view('main_pages.admin_account', compact('products', 'categories', 'subcategories'));
    }

    // Voliteľné – ak by si chcel oddelenú stránku na vytváranie
    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();

        return view('main_pages.admin_account', compact('categories', 'subcategories'));
    }

    // Uloženie nového produktu
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

        // Uloženie obrázka
        $image = $request->file('image'); // Získanie objektu súboru
        $imageName = time() . '.' . $image->getClientOriginalExtension(); // Generovanie unikátneho názvu pre obrázok
        $image->move(public_path('image/uploads'), $imageName); // Presunutie obrázka do verejného adresára 'uploads'


        // Vytvorenie produktu
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

    // Odstránenie produktu
    public function deleteProduct(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
        ]);

        $deleted = Product::where('id', $request->product_id)->delete();

        if ($deleted) {
            return redirect()->back()->with('success', 'Produkt bol úspešne odstránený.');
        } else {
            return redirect()->back()->with('error', 'Produkt s daným ID nebol nájdený.');
        }
    }
}
