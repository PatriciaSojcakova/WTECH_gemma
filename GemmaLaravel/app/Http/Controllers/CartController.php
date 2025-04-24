<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = (int)$request->input('quantity', 1);

        $product = Product::findOrFail($productId);


        if (Auth::check()) {
            $cartItem = Cart::where('id_user', Auth::id())
                ->where('id_product', $productId)
                ->first();

            if ($cartItem) {
                $cartItem->quantity += $quantity;
                $cartItem->save();
            } else {
                Cart::create([
                    'id_user' => Auth::id(),
                    'id_product' => $productId,
                    'quantity' => $quantity,
                ]);
            }
        } else {

            $cart = session()->get('cart', []);

            if (isset($cart[$productId])) {
                $cart[$productId]['quantity'] += $quantity;
            } else {
                $cart[$productId] = [
                    'product_id' => $productId,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => $quantity,
                ];
            }

            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Produkt bol pridaný do košíka.');
    }

    public function showCart()
    {
        if (Auth::check()) {
            $cartItems = Cart::with('product')->where('id_user', Auth::id())->get();
        } else {
            $sessionCart = session()->get('cart', []);
            $cartItems = collect();

            foreach ($sessionCart as $productId => $item) {

                $product = Product::with('image')->find($productId);

                if (!$product) {
                    continue;
                }

                $cart = new Cart();
                $cart->id = $productId;
                $cart->quantity = $item['quantity'];
                $cart->setRelation('product', $product);

                $cartItems->push($cart);
            }
        }

        return view('main_pages.basket', compact('cartItems'));
    }


    public function removeFromCart($id)
    {
        if (Auth::check()) {

            Cart::where('id_user', Auth::id())
                ->where('id', $id)
                ->delete();
        } else {

            $cart = session()->get('cart', []);
            if (isset($cart[$id])) {
                unset($cart[$id]);
            }
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Produkt bol odstránený z košíka.');
    }

    public function updateCart(Request $request, $id)
    {
        $quantity = $request->input('quantity');

        if (Auth::check()) {

            $cartItem = Cart::where('id_user', Auth::id())->where('id', $id)->first();
            if ($cartItem) {
                $cartItem->quantity = $quantity;
                $cartItem->save();
            }
        } else {

            $cart = session()->get('cart', []);
            if (isset($cart[$id])) {
                $cart[$id]['quantity'] = $quantity;
                session()->put('cart', $cart);
            }
        }

        return redirect()->back();
    }

}
