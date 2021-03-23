<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\JobType; 
use App\Models\Backend\Category;
use App\Models\Backend\Job;
use App\Models\Backend\JobApply;
use Image;
use File;
use Auth;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobTypes = JobType::orderBy('name','desc')->get();
        $categories = Category::orderBy('name','asc')->get();
        return view('backend.pages.employer.job.post',compact('jobTypes','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job                    = new Job();
        $job->user_id           = Auth::user()->id;
        $job->job_title         = $request->job_title;
        $job->location          = $request->location;
        $job->job_type          = $request->job_type;
        $job->job_category      = $request->job_category;
        $job->min_salary        = $request->min_salary;
        $job->max_salary        = $request->max_salary;
        $job->description       = $request->description;
        $job->save();
        return redirect()->route('user.dashbord');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // featuread job show in home page
    public function featuredJob($name)
    {
        $featuredJobs = Job::orderBy('id','asc')->where('job_category',$name)->get();
        return view('frontend.pages.job.featuredJob',compact('featuredJobs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // show single jon in fron
    public function show($id)
    {
        $Job = Job::Find($id);
        return view('frontend.pages.job.show',compact('Job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //apply job
    public function applyJob(Request $request, $id)
    {
        $job = Job::Find($id);
        $jobApply = new jobApply();
        $jobApply->job_id               = $job->id;
        $jobApply->freelancer_id        = Auth::user()->id;
        $jobApply->employer_id          = $job->user_id;
        $jobApply->name                 = $request->name;
        $jobApply->email                = $request->emailaddress;
        if ($request->file) {
            $file                   = $request->file('file');
            $fileName = time().'.'.$request->file->extension();  
   
            $request->file->move(public_path('uploads'), $fileName);
            $jobApply->file             = $fileName;
        }
        $jobApply->status = 0;
        $jobApply->save();
        return redirect()->route('user.dashbord');

    }
    // applied job freelancer
    public function appliedJob()
    {
        
        $jobApplies = JobApply::orderBy('id','asc')->where('freelancer_id',Auth::user()->id)->get();
        return view('backend.pages.freelancer.job.appliedJob',compact('jobApplies'));

    }

    // manage job by employer
    public function manageJob()
    {
        
        $jobs = job::orderBy('id','asc')->where('user_id',Auth::user()->id)->get();
        return view('backend.pages.employer.job.manageJob',compact('jobs'));

    }

    // manage Candidate by employer
    public function manageCandidates($id)
    {
        
        $jobApplies = JobApply::orderBy('id','asc')->where('employer_id',Auth::user()->id)->where('job_id',$id)->get();
        // count job applies
         $count = JobApply::orderBy('id','asc')->where('employer_id',Auth::user()->id)->where('job_id',$id)->count();
         
        $job = Job::Find($id);
        return view('backend.pages.employer.job.manageCandidate',compact('jobApplies','job','count'));
        
    }

    //remove cadidate by employyer
    public function removeCandidate($id)
    {
        
        $jobApply = JobApply::Find($id);
        $jobApply->delete(); 
        return redirect()->route('user.dashbord');
        
    }

    //approve cadidate by employer
    public function approveCandidate($id)
    {
        
        $jobApply = JobApply::Find($id);
        $jobApply->status = 1;
        $jobApply->save(); 
        return redirect()->route('user.dashbord');
      

    }
    //download cadidate cv
    public function downloadCandidateCv($id)
    {
        
        $jobApply = JobApply::Find($id);
        return response()->download(public_path('uploads/'.$jobApply->file));
    }


}
