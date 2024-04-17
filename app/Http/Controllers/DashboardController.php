<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $firstName = $request->input("first-name");
        $lastName = $request->input("last-name");

        return view('pages.welcome', ['firstName' => $firstName, 'lastName' => $lastName]);
    }
}
