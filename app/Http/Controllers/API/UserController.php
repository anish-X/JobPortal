<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $r)
    {

        $r->validate ([
           "email "=>"required",
           "password "=>"required",

       ]);


       $user = User::where('email', $r->email)->first();

       if(!$user||!Hash::check($user->password,$r->password)){
           $response =[
               "status" =>false,
               "msg" =>"invalid password"

           ];

           return response()->json($response,422);


       }

           return response()->json($user);

   }
}
