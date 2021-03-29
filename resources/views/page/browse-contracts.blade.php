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
  .es-country-select {
    width: 100%;
    padding: 12px;
    border-radius: 5px;
    margin-bottom: 10px;
    background-color: #666;
    color: #fff;
  }
  .es-hr-divider {
    background-color: transparent !important; 
    color: #fff; 
    border-bottom: 1px solid #fff;
  }
</style>
<section class="es-my-contracts-list pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Browse Contracts</h3>
                <div class="row">
                    <div class="col-md-6">
                        <select class="es-country-select">
                            <option value="not_set">Select a Country</option>
                            <option value="belgium">Belgium</option>
                            <option value="france">France</option>
                            <option value="netherlands">Netherlands</option>
                        </select>
                    </div>
                </div>
                <hr class="p-3 es-hr-divider" style="" />
                <h1>Contracts in Netherlands</h1>
                <hr class="p-3 es-hr-divider" style="" />
                <div class="btn-primary btn mb-4">Apply For Selected Contracts</div>
                <div class="row">
                    <div class="col-md-2">
                        Apply
                    </div>
                    <div class="col-md-5">
                        City
                    </div>
                    <div class="col-md-5">
                        # of Units
                    </div>
                </div>
                <hr />
                @for($i = 0; $i < 5; $i++)
                    <div class="row">
                        <div class="col-md-2">
                            <input type="checkbox">
                        </div>
                        <div class="col-md-5">
                            Amsterdam
                        </div>
                        <div class="col-md-5">
                            123
                        </div>
                    </div>
                @endfor
                <div class="btn-primary btn mt-3 mb-5">Apply For Selected Contracts</div>
            </div>
        </div>
    </div>
</section>
@endsection