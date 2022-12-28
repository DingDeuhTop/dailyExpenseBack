<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (!auth()->attempt($request->validated())) {
            return response(['message' => 'Invalid Credential'], 422);
        }

        // return redirect('/api/buy')->with('messageError', 'Email/password combinatin is invalid');
        return response(['token' => $request->user()->createToken($request->user()->email)->plainTextToken]);
    }

    public function register(LoginRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        User::create($data);
    }

    public function logout()
    {
        request()->user()->currentAccessToken()->delete();
        return response(['message' => 'Logout successfully']);
    }
}
