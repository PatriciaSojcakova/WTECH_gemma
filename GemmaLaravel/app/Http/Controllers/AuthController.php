<?php

namespace App\Http\Controllers;

/*use App\Http\Controllers\Controller;*/
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'conditions' => 'accepted',
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user); // môžeš aj vynechať, ak ho nechceš hneď prihlásiť

        return redirect('/personal_account');
    }

    // tvoje login() tu môže zostať
}
