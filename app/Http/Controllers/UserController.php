<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function register(Request $request)
    {

        $registerFormFields = $request->validate([
            "email" => ['required', "email", Rule::unique("users", "email")],
            "password" =>
            ['required', 'min:3', 'max:50'],
            "name" =>  ['required', 'min:3', 'max:50']
        ]);

        $registerFormFields["password"] = bcrypt($registerFormFields["password"]);

        $user = User::create($registerFormFields);

        auth()->login($user);

        return redirect("/");
    }

    public function login(Request $request)
    {

        $loginFormFields = $request->validate([
            "email" => ['required', 'email'],
            "password" => ['required', 'min:3', 'max:50']
        ]);


        if (auth()->attempt(['email' => $loginFormFields['email'], 'password' => $loginFormFields['password']])) {

            $request->session()->regenerate();

            return redirect("/");
        }

        return redirect("/login-account");
    }

    public function logout()
    {

        auth()->logout();

        return redirect("/");
    }
}
