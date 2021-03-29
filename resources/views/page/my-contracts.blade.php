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
                <h3>My Contracts</h3>
                <div class="row">
                    <div class="col-md-2">
                        Location
                    </div>
                    <div class="col-md-2">
                        # of Units
                    </div>
                    <div class="col-md-3">
                        Country
                    </div>
                    <div class="col-md-2">
                        Bid
                    </div>
                    <div class="col-md-3">
                        Status
                    </div>
                </div>
                <hr />
                @for($i = 0; $i < 5; $i++)
                    <div class="row">
                        <div class="col-md-3">
                            Place {{$i + 1}}
                        </div>
                        <div class="col-md-2">
                            35
                        </div>
                        <div class="col-md-3">
                            United Kingdom
                        </div>
                        <div class="col-md-2">
                            £1234
                        </div>
                        <div class="col-md-2">
                            {{(rand(0,3)) == "1" ? "Allocated" : "Awaiting Payment"}}
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>
@endsection