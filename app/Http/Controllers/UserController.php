<?php

namespace App\Http\Controllers;

use App\Models\User;
use Faker\Provider\Base;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('super_admin.layouts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
       // return $request;
        $request->validate([
            'name' =>['string','required'],
            'email'=>['email','required'],
            'password' =>['required','confirmed','min:7'],
            'username' =>['string','required'],
            'address' =>['string','required'],
            'mobile_num' =>['max:10','required','min:10'],
        ]);
        //return $request;
       $register_user = User::create([
        "mobile_num"=>$request->mobile_num,
        "name"=> $request->name,
        "email"=> $request->email,
        "username"=>$request->username,
        'address'=>$request->address,
        "password"=>Hash::make($request->password),
       ]);
       if(!$register_user){
            return redirect()->route('user.register.proceed')->with('error','User registration failed');
       }
       return redirect()->route('user.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function login(Request $request){
        $request->validate([
            'email'=>['required','email'],
            'password'=>['required'],
            
        ]);
        //return $request;
        $user = User::where('email',$request->email)->orWhere('username',$request->email)->where('role','super_admin')->first();
        //return $user;
         if(!$user || !Hash::check($request->password,$user->password)){
            return "Credentials does not match";
         }

        Auth::login($user);

        return redirect()->route('admin.dashboard')->withSuccess('Login successful');


    }



    public function showForm(){
        return view('user.login');
    }
    public function logout(){
         Auth::logout();
         return redirect()->route('user.login');
    }
}
