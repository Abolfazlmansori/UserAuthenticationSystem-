<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\error;

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
                return redirect()->route('home')->with('success', 'با موفقیت ورود کردید');
        }
        else{
            return back()->withErrors([
                'email' => 'ایمیل یا رمزعبور مشکل دارد!',
            ]);
        }
    }
    public function Logout(AuthService $authService)
    {
        $authService->Logout();
        return redirect()->route('home')->with('success', 'با موفقیت خارج شدید');
    }
}
