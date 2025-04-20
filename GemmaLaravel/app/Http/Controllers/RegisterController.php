<?php

namespace App\Http\Controllers;

/*use App\Http\Controllers\Controller;*/
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'terms_accepted' => 'required|accepted',
            'newsletter_subscribed' => 'nullable',
        ],[
            'name.required' => 'Prosím, zadajte meno.',
            'surname.required' => 'Prosím, zadajte priezvisko.',
            'email.required' => 'E-mail je povinný.',
            'email.email' => 'Zadajte platnú e-mailovú adresu.',
            'email.unique' => 'Tento e-mail sa už používa.',
            'password.required' => 'Prosím, zadajte heslo.',
            'password.min' => 'Heslo musí mať aspoň 6 znakov.',
            'terms_accepted.required' => 'Musíte súhlasiť s obchodnými podmienkami.',
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'terms_accepted' => $request->has('terms_accepted'),
            'newsletter_subscribed' => $request->has('newsletter_subscribed'),
            'admin' => $request->email === 'admin@admin.com' && $request->password === '123456'
        ]);

        Auth::login($user);
        return redirect('/personal_account');
    }
}
