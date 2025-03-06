<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function register(Request $request)
    {
$data = $request->validate([
    'username' => 'required|string',
    'password' => [
        'required',
        'confirmed',
        Password::min(8)->mixedCase()->numbers()->symbols()
    ]
]);
            /** @var \App\Models\User $user **/
            $user = User::create([
                'username' => $data['username'],
            'password' => Hash::make($data['password'])
            ]);
            $token = $user->createToken('main')->plainTextToken;

            return response([
                'user' => $user,
                'token' => $token,
            ]);
            
    }

    public function login (Request $request){

        $exists = User::where('username', $request->username)->exists();

        $credentials = $request->validate([
             "username" => "required|string|exists:users,username",
            "password" =>[
                "required",
            
            ],
            "remember" => "boolean"
        ]);
        $remember = $credentials["remember"] ?? false;
        unset($credentials["remember"]);

        if (!Auth::attempt($credentials, $remember)) {
                return response([
            "error" => "The provided credentials are incorrect"
                ], 422);

    }
    
    /** @var \App\Models\User $user **/
    $user = Auth::user();
    $token = $user->createToken("main")->plainTextToken;

    return response([
        "user"=> $user,
        "token" => $token,
    ]);
}

    public function logout (){

        
    /** @var \App\Models\User $user **/
        $user = Auth::user();
        
    $user->currentAccessToken()->delete();

        return response([
            "success" => true
        ]);
    }
}