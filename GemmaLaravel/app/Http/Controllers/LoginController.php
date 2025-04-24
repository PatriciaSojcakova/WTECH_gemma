<?php

namespace App\Http\Controllers;

/*use App\Http\Controllers\Controller;*/

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Zadajte e-mail.',
            'password.required' => 'Zadajte heslo.',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            $this->mergeSessionCartToDatabase();

            $user = Auth::user();

            if ($user->admin) {
                return redirect()->intended('/admin_account');
            } else {
                return redirect()->intended('/personal_account');
            }
        }

        return back()->withErrors([
            'email' => 'Neplatné prihlasovacie údaje.',
        ], 'login')->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    private function mergeSessionCartToDatabase()
    {
        $sessionCart = session('cart', []);

        foreach ($sessionCart as $productId => $item) {
            $cartItem = Cart::where('id_user', Auth::id())
                ->where('id_product', $productId)
                ->first();

            if ($cartItem) {
                // Aktualizuj množstvo
                $cartItem->quantity += $item['quantity'];
                $cartItem->save();
            } else {
                // Vytvor nový záznam
                Cart::create([
                    'id_user' => Auth::id(),
                    'id_product' => $productId,
                    'quantity' => $item['quantity'],
                ]);
            }
        }

        session()->forget('cart');
    }

}
