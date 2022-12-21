<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyCategory;
use App\Models\Job;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $lists = Job::where('is_active', true)
            ->latest()
            ->get();


        return view('job.index',compact('lists'));
    }

    public function view(){

        return view('job.view',['views' => Job::all()]);

    }
    public function archive(){
        $jobs = Job::onlyTrashed()->get();

        return view('job.archive',compact('jobs'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job.create',[
            'categories' => JobCategory::all(),
            'companies' => Company::all(),
        ]);
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
            'title' =>'required',
            'description' => 'required',
            'job_category' => 'required',
            'company' => 'required',
            'gender' => 'required',
            'salary_type' => 'required',
            'min_salary' => 'required',
            'max_salary' => 'required',
            'experience' => 'required',
            'qualification' => 'required',
            'deadline' =>'required',
            'vacancy' => 'required',
            'location' => 'required',

        ]);


        $job = Job::create([
            'title' => $request->title,
            'description' => $request->description,
            'job_category_id' => $request->job_category,
            'company_id' => $request->company,
            'gender' => $request->gender,
            'salary_type' => $request->salary_type,
            'min_salary' => $request->min_salary,
            'max_salary' => $request->max_salary,
            'experience' => $request->experience,
            'qualification' => $request->qualification,
            'deadline' => $request->deadline,
            'vacancy' => $request->vacancy,
            'location' => $request->location,




        ]);

        return back()->with("message" , "success");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete($id);
        return redirect()->route('job.index');
    }
}
