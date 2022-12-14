<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\CompanyCategory;

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
       return $companies;
       return view('company.index',['companies'=>$companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = CompanyCategory::all();
        // return $company->companycategory->name;
        return view('company.create',['companies'=>$company]); 
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
            $filename = time().".".$extension;
            $file->move('uploads/company/'.$filename);
            $company->logo = $filename;
        }
        $company->company_categories_id = $request->category_id;
        $company->save();
        return redirect()->route('company.create');
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
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
