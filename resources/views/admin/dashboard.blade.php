@extends('layouts.auth.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">people</i>
              </div>
              <p class="card-category">Athletes</p>
              <h3 class="card-title">{{ number_format($athletes) }}</h3>
            </div>
            <div class="card-footer d-flex justify-content-end">
              <div class="stats">
                <a href="{{ route('athletes.index') }}" class="text-right">View More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">how_to_reg</i>
              </div>
              <p class="card-category">Approved Visitors</p>
              <h3 class="card-title">{{ number_format($customers) }}</h3>
            </div>
            <div class="card-footer d-flex justify-content-end">
              <div class="stats">
                <a href="{{ route('approved_customers') }}" class="text-right">View More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="material-icons">pending</i>
              </div>
              <p class="card-category">Pending Visitors</p>
              <h3 class="card-title">{{ number_format($pending_customers) }}</h3>
            </div>
            <div class="card-footer d-flex justify-content-end">
              <div class="stats">
                <a href="{{ route('pending_customers') }}" class="text-right">View More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">block</i>
              </div>
              <p class="card-category">Refused Visitors</p>
              <h3 class="card-title">{{ number_format($denied_customers) }}</h3>
            </div>
            <div class="card-footer d-flex justify-content-end">
              <div class="stats">
                <a href="{{ route('denied_customers') }}" class="text-right">View More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Latest 10 contact messages</h4>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Type</th>
                  <th>Subject</th>
                  <th>Message</th>
                </thead>
                <tbody>
                  @foreach ($messages as $message)
                  <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->submissionType->type }}</td>
                    <td>{{ $message->subject }}</td>
                    <td>{!! $message->message !!}</td>
                  </tr>
                  @endforeach
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
<script>
  @if(session('success'))
      toastr.success('{{ session('success') }}', '{{ trans('app.success') }}', toastr_options);
  @endif
  @if(session('error'))
      toastr.error('{{ session('error') }}', '{{ trans('app.error') }}', toastr_options);
  @endif
</script>
@endpush