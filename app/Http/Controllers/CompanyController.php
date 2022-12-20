<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\CompanyCategory;
use Illuminate\Support\Facades\Storage;
 


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Company::whereBelongsTo($companycategories)->get();
       // return view('controller.index');
    //    $categories = CompanyCategory::all();
    //    return view('company.create', compact('categories'));
       $companies = Company::with('category')->get();
     
       return view('company.index',['companies'=>$companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CompanyCategory::all();
        // return $company->companycategory->name;
        return view('company.create',['categories'=>$categories]); 
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
            "email" => 'required|email',
            "registration_number"=>"required|string",
            "address"=>"required|string",
            "description"=>"required|string",
            "category_id"=>"required",
            "image"=>"required"
        ]);

        
        $company = new Company();
        $company->name = $request->name;
        $company->registration_number = $request->registration_number;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->description = $request->description;
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = uniqid().".".$extension;
            Storage::disk('public')->put($filename, $file);
            $company->logo = $filename;
        }
        $company->company_categories_id = $request->category_id;
        $company->save();
        return redirect()->route('companies.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        $categories = CompanyCategory::all();
        return view('company.edit',[
            "company" => $company ,"categories"=>$categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company = CompanyCategory::findOrFail($id);
        $company->update([
        "name"=> $request->name,
        "registration_number"=> $request->registration_number, 
        "address"=> $request->address,
        "description"=> $request->description,
        "category_id"=> $request->category_id,
        "logo"=> $request->image,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return redirect()->route('companies.index');
    }
}
