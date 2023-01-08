<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CompanySubscription;
use Illuminate\Http\Request;

class CompanySubscriptionController extends Controller

{
    public function index(){
        $companysubscription = CompanySubscription::all();
        return response()->json(['data' => $companysubscription],200);

    }
    public function store(Request $request){
        $companysubscription =  CompanySubscription::create($request->all());
        $respone= ([
              'status'=>true,
              'data'=>$companysubscription,

        ]);
        return response()->json($respone,201);
    }
    public function update(Request $request,$id){
        $companysubscription = CompanySubscription::find($id);
        if(!$companysubscription){
            $response =([
                               'status'=>true,
                               "data"=>$companysubscription,


            ]);
            return response()->json(['data'=>$response],404);


        }
        $companysubscription->update([
            'company_id' => $request->company_id,
            'subscription_id' => $request->subscription_id,
        ]);
        // $companysubscription= $companysubscription->update([
        //     'subscription_id'=>$request->subscription_id,
        //     'company_id'=>$request->company_id,

        // ]);
        return response()->json(['data' => $companysubscription], 200);



    }
    public function destroy(companysubscription $companysubscription,$id)
    {

        $companysubscription = CompanySubscription::find($id);
        if (!$companysubscription)
        {
            $response = [
                       'status' =>false,
                        'data' =>  $companysubscription
                    ];
                    return response()->json(['data' => $response], 404);

        }
        $companysubscription =$companysubscription->delete();
        return response()->json(['data' => $companysubscription], 200);
    }




}
