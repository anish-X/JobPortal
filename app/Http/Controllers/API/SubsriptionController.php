<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\Subscription as APISubscription;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SubscriptionController;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubsriptionController extends Controller
{
    public function index()
    {
        $subscription = Subscription::all();
        return response()->json(['data' => $subscription], 200);
    }
    public function show(subscription $subscription,$id)
    {

        $subscription = Subscription::find($id);
        if (!$subscription)
        {
            $response = [
                       'status' =>true,
                        'data' =>  $subscription
                    ];
                    return response()->json(['data' => $response], 404);

        }
        return response()->json(['data' => $subscription], 200);
        // return response()->json(['data' => $subscription], 200);
    }





     public function create()
     {

     }



    public function store(Request $request)
    {
        $subscription =Subscription::create($request->all());
        $response = [
            'status' =>true,
            'data' => $subscription
        ];
        return response()->json(['data' => $response], 201);
    }
    public function update(Request $request, $id)
    {
        $subscription = Subscription::find($id);
        if (!$subscription)
        {
            $response = [
                       'status' =>true,
                        'data' =>  $subscription
                    ];
                    return response()->json(['data' => $response], 404);

        }
        $subscription ->update([
            'name' => $request->name,
            'rate' => $request->rate,
            'duration' => $request->duration,


        ]);
        return response()->json(['data' => $subscription], 200);

    }
    public function destroy(subscription $subscription,$id)
    {

        $subscription = Subscription::find($id);
        if (!$subscription)
        {
            $response = [
                       'status' =>true,
                        'data' =>  $subscription
                    ];
                    return response()->json(['data' => $response], 404);

        }
        $subscription =$subscription->delete();
        return response()->json(['data' => $subscription], 200);
    }

}
