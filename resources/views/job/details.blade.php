@extends('layouts.lonsdale-master')
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
</style>
<section class="es-my-contracts-list pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Job Details for {{ $job['title'] }}</h3>
                <p>These are the Job Details for {{ $job['content'] }} </p>
            </div>
        </div>
    </div>
</section>
@endsection