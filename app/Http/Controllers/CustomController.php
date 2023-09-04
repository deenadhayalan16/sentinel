<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function index()
    {
        return view("pages.login");
    }
    public function loginpage(Request $request)
    {
        $request->validate([
            'email' => "required",
            'password' => "required",
        ]);
        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
        ];
        Sentinel::authenticate($credentials);
        if (Sentinel::check()) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')
            ->with('error', 'Login Failed');
        }
    }
    public function register()
    {
        return view("pages.register");
    }
    public function registerpage(Request $request)
    {

        $request->validate([
            'name' => "required",
            'email' => "required|email",
            'mobilenumber' => "required|max:10|min:10",
            'password' => "required",
        ]);

        $credentials = [
            'name'    => $request->name,
            'email'    => $request->email,
            'mobile_number'    => $request->mobilenumber,
            'password' => $request->password,
        ];

        Sentinel::registerAndActivate($credentials);
        return redirect()->route('register')
            ->with('success', 'Register Successfully');
    }
}
