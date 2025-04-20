<?php

namespace App\Http\Controllers;

/*use App\Http\Controllers\Controller;*/
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('name','surname','email', 'password','terms_accepted');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/personal_account');
        }

        return back()->withErrors([
            'email' => 'Neplatné prihlasovacie údaje.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
