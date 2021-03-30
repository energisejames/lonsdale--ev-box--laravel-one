<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ESJF : Default Root Landing Page
Route::get('/', function () {
    return view('page.landing-page');
})->name('page.landing-page');

// ESJF : Account-details blade file
Route::get('account-details', function () {
    return view('page.account-details');
})->name('page.account-details');

// ESJF : My Contracts blade file
Route::get('my-contracts', function () {
    return view('page.my-contracts');
})->name('page.my-contracts');

// ESJF : Browse Contracts blade file
Route::get('browse-contracts', function () {
    return view('page.browse-contracts');
})->name('page.browse-contracts');
	
Route::group(['prefix' => 'engineer'], function() {
	// ESJF : Begin 'job' grouping of Routes
	// =====================================
	
	// ESJF : Handle an engineer 'sign up' post using dependency injection
	Route::post('create', function (\Illuminate\Http\Request $request, \Illuminate\Validation\Factory $validator) {
		  $validation = $validator->make($request->all(), [
			  'first_name' => 'required|min:2',
			  'email' =>  'e-mail'
		  ]);
		  if ($validation->fails()) {
			  return redirect()->back()->withErrors($validation);
		  }
	    return redirect()
	      ->route('page.account-details')
	      ->with('info', 'Engineer Created ' . $request->input('first_name'));
	})->name('engineer.create');
	
	// ESJF : End 'job' grouping of Routes
	// =====================================
});

Route::group(['prefix' => 'job'], function() {
	// ESJF : Begin 'job' grouping of Routes
	// =====================================
	
	// ESJF : Show individual Job based on id
	Route::get('{id}', function ($id) {
		  $dummy_job_data = [
		    'title' => 'BigJobberson',
		    'content' => 'get jobbing on big jobberson'
		  ];
	    return view('job.details', ['job' => $dummy_job_data]);
	})->name('job.details');
	
	// ESJF : End 'job' grouping of Routes
	// =====================================
});

// ESJF : n.b. its also possible to return a redirect
// or JSON from a route request e.g. 
// return redirect()->route('index');
// return Response::json(['full_name' => 'James Forbear']);






