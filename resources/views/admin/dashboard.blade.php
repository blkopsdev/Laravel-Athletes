@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">people</i>
              </div>
              <p class="card-category">Customers</p>
              <h3 class="card-title">1000</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <p></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">access_time</i>
              </div>
              <p class="card-category">Today's Transactions</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Last 10 Transactions</h4>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Created On</th>
                  <th>Customer</th>
                  <th>Type</th>
                  <th>Purchase Subtotal</th>
                  <th>Tax</th>
                  <th>Purchase Total</th>
                  <th>Store Credit</th>
                  <th>{{ __('Cash In/Out') }}</th>
                  <th>Credit Balance</th>
                  <th></th>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
@endpush