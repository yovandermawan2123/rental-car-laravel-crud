@extends('layouts.main')
@section('container')
    

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center p2-3 pb-2 mb-3 border-bottom">
  <h2 class="h2">Welcome back</h1>

    

</div>

{{-- <div class="row">
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <a href="/branches" style="text-decoration:none ;">

      <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          Surya Branches</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $branches }}</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
      </a>
  </div> --}}

  {{-- <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
  <a href="/members" style="text-decoration:none ;">
      <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                          Surya Members</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $members }}</div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </a>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
      <a href="/products" style="text-decoration:none ;">
      <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Product Rewards
                      </div>
                      <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $products }}</div>
                          </div>
                        
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-gift fa-2x fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
      </a>
  </div>

  <!-- Pending Requests Card Example -->
 


  

  </div> --}}



@endsection