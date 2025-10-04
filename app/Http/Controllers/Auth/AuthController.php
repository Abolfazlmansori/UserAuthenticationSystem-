<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Register(RegisterRequest $request,AuthService $authService)
    {
        $authService->Register($request->validated());

        return redirect()->route('login');
    }
    public function Login(LoginRequest $request,AuthService $authService)
    {
        if ($authService->Login($request->validated())){
            return redirect()->route('email.verify')->with('success', 'You are successfully logged in');
        }
        else{
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }
    public function Logout(AuthService $authService)
    {
        $authService->Logout();
        return redirect()->route('home')->with('success', 'You are successfully logged out');
    }
}
