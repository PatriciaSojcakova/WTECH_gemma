<?php

namespace App\Http\Controllers;

/*use App\Http\Controllers\Controller;*/
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Zadajte e-mail.',
            'password.required' => 'Zadajte heslo.',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/personal_account');
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
}
