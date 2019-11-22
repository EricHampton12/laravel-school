<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    // public function login(Request $request){
    //     $user = \App\User::where('email', $request->email)->get()->first();
    //     if ($user && \Hash::check($request->password, $user->password)){
    //         $token = self::getToken($request->email, $request->password);
    //         $user->auth_token = $token;
    //         $user->save();
    //         $response = ['success'=>true, 'data'=>['id'=>$user->id,'auth_token'=>$user->auth_token,'name'=>$user->name, 'email'=>$user->email]];           
    //     }
    // }
}


