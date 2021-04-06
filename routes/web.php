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
/*
Route::get('my-contracts', function () {
    return view('page.my-contracts');
})->name('page.my-contracts');
*/
Route::get('my-contracts', [
    'uses' => 'JobController@myContracts',
    'as' => 'page.my-contracts',
]);

// ESJF : Browse Contracts blade file
/*
Route::get('browse-contracts', function () {
    return view('page.browse-contracts');
})->name('page.browse-contracts');
*/
Route::get('browse-contracts', [
    'uses' => 'JobController@browseContracts',
    'as' => 'page.browse-contracts',
]);

// many to many table ... engineer_job.create
Route::post('engineer_job', [
    'uses' => 'JobController@engineerAttach',
    'as' => 'engineer_job.create',
]);

	
Route::group(['prefix' => 'engineer'], function() {
	// ESJF : Begin 'job' grouping of Routes
	// =====================================
	
	// ESJF : Handle an engineer 'sign up' post using dependency injection
	/* old way
	Route::post('create', function (\Illuminate\Http\Request $request, \Illuminate\Validation\Factory $validator) {
		  $validation = $validator->make($request->all(), [
			  'engineerFirstName' => 'required|min:2',
			  'engineerEmail' =>  'e-mail'
		  ]);
		  if ($validation->fails()) {
			  return redirect()->back()->withErrors($validation);
		  }
	    return redirect()
	      ->route('page.account-details')
	      ->with('info', 'Engineer Created ' . $request->input('engineerFirstName'));
	})->name('engineer.create');
	*/
	
	// ESJF : New way
	Route::post('create', [
  	    'uses' => 'EngineerController@engineerCreate',
  	    'as' => 'engineer.create',
	]);
	
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

Route::group(['prefix' => 'es-admin'], function() {
  
  Route::get('/', [
  	    'uses' => 'JobController@getJobs',
  	    'as' => 'es-admin.home',
	]);

	Route::post('create-job', [
  	    'uses' => 'JobController@jobCreate',
  	    'as' => 'job.create',
	]);
	
	// ESJF : End 'job' grouping of Routes
	// =====================================
});




