@extends('layouts.auth.app', ['activePage' => 'contact', 'titlePage' => __('Contact Messages')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">{{ __('Dashboard') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('Contact Messages') }}</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h2>{{ $title }}</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">{{ __('Total Contact Messages:') }} <strong class="text-white">{{ number_format($total) }}</strong></h4>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover" id="contact">
                <thead class="text-warning">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Type</th>
                  <th>Subject</th>
                  <th>Message</th>
                </thead>
                <tbody>
                  {{-- @foreach ($contacts as $contact)
                  <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->submissionType->type }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{!! $contact->message !!}</td>
                  </tr>
                  @endforeach --}}
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
    $('#contact').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ url('contact_ajax') }}",
      columns: [
          {data: 'id', name: 'id'},
          {data: 'name', name: 'name'},
          {data: 'email', name: 'email'},
          {data: 'type', name: 'type'},
          {data: 'subject', name: 'subject'},
          {data: 'messages', name: 'message', orderable: false},
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