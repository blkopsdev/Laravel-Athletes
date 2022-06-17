@extends('layouts.auth.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

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
              <p class="card-category">Athletes</p>
              <h3 class="card-title">{{ number_format($athletes) }}</h3>
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
              <p class="card-category">Approved Visitors</p>
              <h3 class="card-title">{{ number_format($customers) }}</h3>
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
                  {{-- <th>Replied</th>
                  <th>Action</th> --}}
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
                    {{-- <td>{{ $message->replied == 0 ? 'No' : 'Yes' }}</td> --}}
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