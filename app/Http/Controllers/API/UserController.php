<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function register(Request $request){
    $validatedData = $request->validate([
        "name" => "required|string",
        "username" => "required|string",
        "email"=> "required|string|unique:users",
        "password" => "required|string",
        "mobile_num" => "required|string",
        "address" => "required|string",
    ]);

    $user = User::create([
        'name' => $validatedData['name'],
        'username' => $validatedData['username'],
        'email' => $validatedData['email'],
        'password' =>Hash::make($validatedData['password']) ,
        'mobile_num' => $validatedData['mobile_num'],
        'address' => $validatedData['address'],
    ]);

    $token = $user->createToken($request->email)->plainTextToken;

    $response = [
        'access_token' => $token,
    
    ];
    return response()->json($response);
   }

    public function login(Request $request){
        $request->validate([
            "email"=> "required | email",
            "password"=> "required",
        ]);
        $user = User::where("email",$request->email)->first();
    
        if(!$user || !Hash::check($request->password,$user->password)){
            $response = [
                "status"=>false,
                "msg"=>"invalid Password"
            ];
          return response()->json($response,422);  
        }
        

        $token = $user->createToken($request->email)->plainTextToken;
        $response = [
            "status"=>true,
            "token"=>$token,
            "user"=>$user
        ];
        return response()->json($response);
    } 

    public function user(Request $request){
        return $request->user();
    }
    
    
}
