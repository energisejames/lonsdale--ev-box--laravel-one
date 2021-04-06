<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Job;

class JobController extends Controller
{
    //
    public function jobCreate(Request $request) 
    {
        $job = new Job([
            'jobDetailsUrl' => $request->input('jobDetailsUrl'),
            'unitNumber' => $request->input('unitNumber'),
            'jobLocationIdWithinSite' => $request->input('jobLocationIdWithinSite'),
            'jobSiteName' => $request->input('jobSiteName'),
            'jobAddressLineOne' => $request->input('jobAddressLineOne'),
            'jobAddressLineTwo' => $request->input('jobAddressLineTwo'),
            'jobAddressCity' => $request->input('jobAddressCity'),
            'jobAddressCounty' => $request->input('jobAddressCounty'),
            'jobAddressPostCode' => $request->input('jobAddressPostCode'),
            'jobStatus' => $request->input('jobStatus'),
        ]);
        $job->save();
        $jobs = Job::all();
        return view('job.admin_list', ['jobs' => $jobs]);
    }
    
    // ESJF : List all jobs and return jobs admin view
    /*
    public function jobList(Request $request) 
    {
        // list all jobs
        $job = new Job();
        $jobs = $job->getJobs();
        return view('job.admin_list', ['jobs' => $jobs]);
        //return view('job.admin_list');
    }
    */
    
    public function getJobs() 
    {
        $jobs = Job::all();
        return view('job.admin_list', ['jobs' => $jobs]);
    }
    
    public function browseContracts() 
    {
        $jobs = Job::all();
        return view('page.browse-contracts', ['jobs' => $jobs]);
        //return view('page.browse-contracts');
    }
    
    public function engineerAttach(Request $request)
    {
        $job = Job::find($request->input('id'));
        $job->engineers()->attach($request->input('engineer_id'));
        return redirect()->route('page.my-contracts');
    }
    
    public function myContracts() 
    {
        // return myContracts blade view
        $jobs = Job::all();
        return view('page.my-contracts', ['jobs' => $jobs]);
    }
    
}









