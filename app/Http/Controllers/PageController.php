<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function ShowHomePage()
    {
        return view('home');
    }
    public function ShowRegisterPage()
    {
        return view('Auth.Register');
    }
    public function ShowLoginPage()
    {
        return view('Auth.Login');
    }
}
