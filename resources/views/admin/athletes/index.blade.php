@extends('layouts.auth.app', ['activePage' => 'athletes', 'titlePage' => __('Athletes')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">{{ __('Dashboard') }}</a></li>
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
          <a href="{{ route('athletes.create') }}" class="btn btn-primary btn-rounded" rel="tooltip" data-original-title="" title="{{ __('Add') }}"><i class="material-icons mr-2">add</i>{{ __('Add') }}</a>
          <a href="{{ route('athlete_import') }}" class="btn btn-primary btn-rounded" rel="tooltip" data-original-title="" title="{{ __('Import') }}"><i class="material-icons mr-2">upload</i>{{ __('Import') }}</a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('Total Athletes:') }} <strong class="text-white">{{ number_format($total) }}</strong></h4>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover" id="athletes">
                <thead class="text-primary">
                  <th>ID</th>
                  <th>Name</th>
                  <th>City/School</th>
                  <th>Position</th>
                  <th>Class</th>
                  <th>State</th>
                  <th>Action</th>
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
<script>
  $(document).ready(function() {
    $('#athletes').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ url('athletes_ajax') }}",
      columns: [
          {data: 'id', name: 'id'},
          {data: 'name', name: 'name'},
          {data: 'city_school', name: 'city_school'},
          {data: 'position', name: 'position'},
          {data: 'class', name: 'class'},
          {data: 'state', name: 'state'},
          {
            data: 'action', 
            name: 'action', 
            searchable: false,
            orderable: false
          },
      ],
      "order": [[ 0, "desc" ]]
    })
  });
</script>

<script>
  @if(session('success'))
      toastr.success('{{ session('success') }}', '{{ trans('app.success') }}', toastr_options);
  @endif
  @if(session('error'))
      toastr.error('{{ session('error') }}', '{{ trans('app.error') }}', toastr_options);
  @endif
</script>
@endpush