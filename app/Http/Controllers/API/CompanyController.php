<?php

namespace App\Http\Controllers\API;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CompanyController extends Controller
{
    public function index(){
        $company = Company::all();
        return response()->json($company);
    }
}
