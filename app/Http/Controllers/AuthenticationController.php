<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            // dd($user->password);

            if ($user->validateForPassportPasswordGrant($request->password) == $user->password) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = [
                    'token' => $token,
                    'user' => $user
                ];
                return response($response, 200);
            } else {
                $response = 'User doesn\'t exist';
                return response($response, 422);
               
            }
        } 
    }
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        $request->user()->token()->delete();

        $response = 'You have been successfully logged out!';
        return response($response, 200);
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' =>'required|min:8'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
            $token = $user->createToken('Token has been created')->accessToken;
            $response = [
                'token' => $token,
                'user' => $user
            ];
            $loginNow=[
                'email' => $request->email,
                'password' =>$request->password
            ];
            $loginRequest= new Request($loginNow);
            return self::login($loginRequest);
            // return response($response, 200);
    }
}
