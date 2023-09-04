<?php

namespace App\Http\Controllers;

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
            'mobilenumber' => "required|number",
            'password' => "required|max:10|min:10",
        ]);
    }
}
