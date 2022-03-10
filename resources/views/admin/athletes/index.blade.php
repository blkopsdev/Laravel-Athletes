@extends('layouts.app', ['activePage' => 'athletes', 'titlePage' => __('Athletes')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">{{ __('Home') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('Athletes') }}</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h2>{{ $title }}</h2>
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-end">
          <a href="{{ route('athletes.create') }}" class="btn btn-warning btn-rounded" rel="tooltip" data-original-title="" title="{{ __('Add') }}"><i class="material-icons mr-2">add</i>{{ __('Add') }}</a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">{{ __('Total Athletes:') }} <strong class="text-primary">{{ number_format($total) }}</strong></h4>
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