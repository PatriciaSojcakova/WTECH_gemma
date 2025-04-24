<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class OrderController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string',
            'city' => 'required|string',
            'postalCode' => 'required|string',
            'phone' => 'required|string',
            'doprava' => 'required|in:kurier,posta',
            'platba' => 'required|in:dobierka,prevod,karta',
        ]);

        $userId = Auth::check() ? Auth::id() : null;

        $order = Order::create([
            'id_user' => $userId,
            'first_name' => $validated['firstName'],
            'last_name' => $validated['lastName'],
            'email' => $validated['email'],
            'address' => $validated['address'],
            'city' => $validated['city'],
            'zipcode' => $validated['postalCode'],
            'phone' => $validated['phone'],
            'shipping' => $validated['doprava'] === 'kurier' ? 'courier' : 'post',
            'payment' => match($validated['platba']) {
                'dobierka' => 'cash on delivery',
                'prevod' => 'transfer',
                'karta' => 'online',
            },
            'sum' => 0,
        ]);

        $items = [];

        if ($userId) {
            $cartItems = Cart::where('id_user', $userId)->get();
        } else {
            $cartItems = collect(Session::get('cart', []));
        }

        $sum = 0;

        foreach ($cartItems as $item) {


            if ($userId) {
                $product = $item->product;
                $quantity = $item->quantity;
                $price = $product->price;
            } else {

                $productId = $item['product_id'];
                $product = Product::find($productId);
                $quantity = $item['quantity'];
                $price = $product->price;
            }


            if ($product) {
                OrderItem::create([
                    'id_order' => $order->id,
                    'id_product' => $product->id,
                    'quantity' => $quantity,
                ]);

                $sum += $price * $quantity;
            }
        }

        $order->update(['sum' => $sum]);

        if ($userId) {
            Cart::where('id_user', $userId)->delete();
        } else {
            Session::forget('cart');
        }

        return redirect()->route('order.success');
    }
}
