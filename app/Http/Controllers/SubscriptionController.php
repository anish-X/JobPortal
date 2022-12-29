<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscription = Subscription::get();
         // return view('subscription.index',['subscription' => Subscription::all()]);
       return view ('subscription.index',["subscriptions"=>$subscription]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ('subscription.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required|string",
            "rate"=>"required|string",
            "duration"=>"required|string",

        ]);

        $subscription=Subscription::create([
            'name'=>$request->name,
            'rate'=>$request->rate,
            'duration'=>$request->duration,

        ]);
        if($subscription)
        {
            return back()->with("error","error message") ;
        }
            return redirect('subscription.create')->with('success_msg', 'Subscription created!');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    $subscription=Subscription::findOrfail($id);

        return view ('subscription.edit',["subscription"=>$subscription]);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subscription=Subscription::findOrfail($id);
        $subscription->update([
            'name'=>$request->name,
            'rate'=>$request->rate,
            'duration'=>$request->duration,]);

             if(!$subscription)
        {
            return back()->with("error","error message") ;
        }
            return redirect('sub')->with('success_msg', 'Subscription created!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subscription=Subscription::findOrfail($id);
        $subscription->delete($subscription);
        return redirect('sub')->with('success_msg', 'Subscription deleted!');
    }
}
