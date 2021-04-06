@extends('layouts.lonsdale-admin')
@section('content')
<style>
  .es-my-contracts-list {
    background-color: #222;
  }
  .es-detail {
    background-color: #222;
    font-family: monospace;
    color: #5F3;
    padding: 12px;
    border-radius: 5px;
    margin-bottom: 10px;
    width: 100%;
  }
  .es-form input,
  .es-form select {
    background-color: #222;
    font-family: monospace;
    color: #5F3;
    padding: 12px;
    border-radius: 5px;
    margin-bottom: 10px;
    width: 100%;
  }
  .es-job {
    background-color: #A22;
    font-family: sans-serif;
    color: #fff;
    padding: 20px;
    border-radius: 5px;
    margin-bottom: 10px;
    width: 100%;
  }
  .es-job:hover {
    background-color: #E22;
  }
  .es-pull-right {
    float: right;
  }
</style>
<section class="es-admin-jobs-list pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Admin Area</h3>
                <p>Create a new job below. Listing all jobs... </p>
                @foreach($jobs as $job)
                    <div class="es-job">{{ $job->jobAddressLineOne }} <a class="btn btn-primary es-pull-right" href="{{ $job->jobDetailsUrl }}">Details</a></div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="es-admin-job-create pt-4 pb-4 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3>Create a New Job</h3>
                <form 
                  class="es-form" 
                  action="{{ route('job.create') }}" 
                  method="post"
                >
                    <p>Etiam vel mauris dictum, fringilla mi ut, auctor libero. Ut orci neque, euismod nec lorem sit amet, consectetur lacinia mi. Donec euismod rutrum mauris, non feugiat justo placerat nec. Etiam vitae mi sit amet augue imperdiet ultrices sodales a diam.</p>
                    <input 
                      type="text"
                      class="form-control"
                      id="jobDetailsUrl"
                      name="jobDetailsUrl"
                      placeholder="jobDetailsUrl"
                    />
                    <input 
                      type="text"
                      class="form-control"
                      id="unitNumber"
                      name="unitNumber"
                      placeholder="unitNumber"
                    />
                    <input 
                      type="text"
                      class="form-control"
                      id="jobLocationIdWithinSite"
                      name="jobLocationIdWithinSite"
                      placeholder="jobLocationIdWithinSite"
                    />
                    <input 
                      type="text"
                      class="form-control"
                      id="jobSiteName"
                      name="jobSiteName"
                      placeholder="jobSiteName"
                    />
                    <input 
                      type="text"
                      class="form-control"
                      id="jobAddressLineOne"
                      name="jobAddressLineOne"
                      placeholder="jobAddressLineOne"
                    />
                    
                    <input 
                      type="text"
                      class="form-control"
                      id="jobAddressLineTwo"
                      name="jobAddressLineTwo"
                      placeholder="jobAddressLineTwo"
                    />
                    <input 
                      type="text"
                      class="form-control"
                      id="jobAddressCity"
                      name="jobAddressCity"
                      placeholder="jobAddressCity"
                    />
                    <input 
                      type="text"
                      class="form-control"
                      id="jobAddressCounty"
                      name="jobAddressCounty"
                      placeholder="jobAddressCounty"
                    />
                    <input 
                      type="text"
                      class="form-control"
                      id="jobAddressPostCode"
                      name="jobAddressPostCode"
                      placeholder="jobAddressPostCode"
                    />
                    
                    <label for="jobStatus">Choose a jobStatus:</label>
                    <select name="jobStatus" id="jobStatus">
                        <option value="not_set">Choose a jobStatus</option>
                        <option value="sandbox">sandbox</option>
                        <option value="available">available</option>
                        <option value="requested_by_engineer">requested_by_engineer</option>
                        <option value="allocated_to_engineer">allocated_to_engineer</option>
                        <option value="evidence_supplied">evidence_supplied</option>
                        <option value="approved_by_lonsdale">approved_by_lonsdale</option>
                        <option value="payment_made">payment_made</option>
                    </select> 

                    <!-- ESJF : we need to include this token in Laravel Forms to prevent Cross Site Request Forgery -->
                    {{ csrf_field() }}
                    <!-- ESJF : the above Laravel function will create a hidden _token field for us -->
                    <button type="submit" class="btn btn-success p-2 w-100">Register</div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection