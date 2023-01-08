<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Subscription extends Controller
{
    // public function  index()
    // {
    //     $subscription = Subscription::all();
    //     return response()->json(['data' => $subscription], 200);
    // }
    public function show(Subscription $subscription){
        return response()->json(['data' => $subscription], 200);

    }
}
