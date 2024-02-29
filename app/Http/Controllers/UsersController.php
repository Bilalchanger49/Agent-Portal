<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class UsersController extends Controller
{
    public function register(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => ['min:5', 'confirmed', 'required']
        ]);

        $user = User::create($validate);
       // $token = $user->createToken('auth_token')->accessToken;

        return response()->json(
            [
                'message' => 'user have been created',
                'status' => 1,
               // 'Token' => $token,
                'user' => $user,
        ]  ,200);
    }

    public function login(Request $request) {
        $validate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $user = User::where('email', $validate['email'])
        ->where('password', $validate['password'])
        ->first();

        if ($user) {
            // Password is correct
            return response()->json([
                'message' => 'User has been logged in',
                'status' => 1,
                'user' => $user,
            ], 200);
        } else {
            // Invalid credentials
            return response()->json([
                'message' => 'Invalid credentials',
                'status' => 0,
            ], 401);
        }
    }


    public function getUser($id){
        $user = User::find($id);

        if(is_null($user)){
            return response()->json(
                [
                    'message' => 'user not found',
                    'status' => 0,
                    'user' => null,
            ]  ,401);
        }else{
            return response()->json(
                [
                    'message' => 'user found',
                    'status' => 1,
                    'user' => $user,
            ]  ,200);
        }
    }
}
