<?php

namespace App\Services;


use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function Register(array $data): User
    {
        $user = User::query()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);

        Auth::login($user);

        return $user;
    }

    public function Login(array $data): bool
    {
        return Auth::attempt([
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
    }

    public function Logout(): void
    {
        Auth::logout();
    }
}
