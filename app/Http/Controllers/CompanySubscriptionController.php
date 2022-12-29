<?php

namespace App\Http\Controllers;

use App\Models\CompanySubscription;
use App\Models\Company;
use App\Models\Subscription;
use Illuminate\Http\Request;

class CompanySubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
     {

        $companysubscriptions =  CompanySubscription::get();
        return view('CompanySubscription.index',['companysubscriptions' => $companysubscriptions]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()






    {
        $company_subs = Company::all();
        $subscriptions = Subscription::all();

        return view('CompanySubscription.create', compact('company_subs',"subscriptions"));






    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $companysubscriptions= CompanySubscription::create([
            'company_id' => $request->company_name,
            'subscription_id' => $request->subscribe_name,
         ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanySubscription  $companySubscription
     * @return \Illuminate\Http\Response
     */
    public function show(CompanySubscription $companySubscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanySubscription  $companySubscription
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanySubscription $companySubscription,$id)
    {
        $companysubscriptions=CompanySubscription::findOrFail($id);
        $company_subs = Company::all();
        $subscriptions = Subscription::all();
        return view('CompanySubscription.edit',compact('company_subs','companysubscriptions',"subscriptions"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompanySubscription  $companySubscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompanySubscription $companySubscription,$id)
    {
        $companysubscriptions=CompanySubscription::findOrFail($id);
        $companysubscriptions->update([
            'company_id' => $request->company_name,
            'subscription_id' => $request->subscribe_name,
        ]);
        return redirect()->route('comsub.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanySubscription  $companySubscription
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $companySubscription=CompanySubscription::findOrFail($id);
        $companySubscription->delete();
        return redirect(route('comsub.index'))->with('success','Company Subscription deleted successfully.');
    }
}
