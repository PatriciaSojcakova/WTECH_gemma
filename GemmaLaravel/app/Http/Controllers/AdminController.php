<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('main_pages.admin_account', compact('products'));
    }

    public function deleteProduct(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer',
        ]);

        $deleted = \App\Models\Product::where('id', $request->product_id)->delete();

        if ($deleted) {
            return redirect()->back()->with('success', 'Produkt bol úspešne odstránený.');
        } else {
            return redirect()->back()->with('error', 'Produkt s daným ID nebol nájdený.');
        }
    }
}
