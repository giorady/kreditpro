<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login()
    {
        validator(request()->all(), [
            'email' => ['required', 'email'],
            'password' => ['required']
        ])->validate();

        try {
            if (auth()->attempt(request()->only(['email', 'password']))) {
                $user = Auth::user();
                //return redirect('/dashboard');
                $token = $user->createToken('API Token')->accessToken;
                return response([
                    'user' => $user,
                    'token' => $token,
                ]);
            }
        } catch (\Exception $e) {
            Log::error('Error creating access token: ' . $e->getMessage());
            return response([
                'message' => 'An error occurred while creating the access token'
            ], 500); // HTTP status code for Internal Server Error
        }

        return response([
            'message' => 'Invalid username/password'
        ], 401); // HTTP status code for Unauthorized
    }

    public function user()
    {
        return Auth::user();
    }

    public function register(RegisterRequest $request)
    {
        try {
            $user = User::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'mobile' => $request->input('mobile'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);
            return $user;
        } catch (\Exception $e) {
            return response([
                'message' => $e->getMessage()
            ], 400);
        }
    }
}
