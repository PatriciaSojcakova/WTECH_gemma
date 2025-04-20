<?php

namespace App\Http\Controllers;

/*use App\Http\Controllers\Controller;*/
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request)
    {


        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'terms_accepted' => 'required|accepted',
            'newsletter_subscribed' => 'nullable',
        ]);

        $user = new User();
        $user->name = $request->first_name;
        $user->surname = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Auth::login($user);

        return redirect('/personal_account');
    }
}
