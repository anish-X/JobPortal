<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyCategory;
use Illuminate\Http\Request;

class CompanyCategoryController extends Controller
{
    public function index(){
        $categories = CompanyCategory::all();
        return response()->json($categories);
    }

    public function store(Request $request){
        $companyCategory = CompanyCategory::create([
            "name" => $request->name,
        ]);

        $response = [
            "status" => true,
            "message"=> "Category created successfully",
            "category" => $companyCategory
        ];
        return response($response,201);
    }

    public function show($id){
        // $id = CompanyCategory::where('id', $id)->first();
        
        $id = CompanyCategory::find($id);
        if($id){
            $response =[
                "status"=> true,
                "companyCategory" => $id
            ];
            return response()->json($response,200);
        }

        $response =[
            "status"=> false,
            "companyCategory"=>"company Category not found"
        ];
        return response()->json($response,404);
    }

    public function update(Request $request,$id){
        $companyCategory = CompanyCategory::find($id);
        if($id){
     $companyCategory->update([
                "name"=> $request->name,
            ]);
            $response = [
                "status" => true,
                "companyCategory"=>$companyCategory,
            ];
    
            return response()->json($response,200);
        }
        $response=[
            "status" => false,
            "message" =>"company category not found"
        ];
        return response()->json($response,404);
    }
    public function destroy($id){
        $companyCategory = CompanyCategory::find($id);
        if(!$id){
            $response =[
                'status' => false,
                'message' => 'Could not find company category'
            ];
        }

        $companyCategory->delete();
        $response = [
            "status" => true,
            'nessage' => 'company category deleted successfully'
        ];

        return response()->json($response,200);        
    }
}
