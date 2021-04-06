<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Post;
// ESJF : do we need use line below also?
use App\Http\Requests;
use App\Engineer;

class EngineerController extends Controller
{
    //Store $session, 
    public function engineerCreate(Request $request) 
    {
        $engineer = new Engineer([
            'engineerFirstName' => $request->input('engineerFirstName'),
            'engineerLastName' => $request->input('engineerLastName'),
            'engineerCompanyName' => $request->input('engineerCompanyName'),
            'engineerEmail' => $request->input('engineerEmail'),
            'engineerAddressCounty' => $request->input('engineerAddressCounty'),
        ]);
        $engineer->save();
        return redirect()->route('page.account-details');
    }
    
    /*
    public function engineerCreate(Request $request)
    {
        
        //$engineer = new Engineer();
    }
    */
    
    public function getDummyEngineers()
    {
        // ESJF : provide dummy data for testing?
    }
}
