@extends('layouts.auth.app', ['activePage' => 'customers.index', 'titlePage' => __('Visitors')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">{{ __('Dashboard') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('Visitors') }}</li>
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
              <h4 class="card-title">{{ __('Total Number:') }} <strong class="text-white">{{ number_format($customers->count()) }}</strong></h4>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-hover" id="customers">
                <thead class="text-primary">
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @if ($customers->count() > 0)
                    @foreach ($customers as $customer)
                      <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->first_name }}</td>
                        <td>{{ $customer->last_name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td class="action">
                          <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-primary p-2" rel="tooltip" data-original-title="" title="View"><i class="material-icons">visibility</i></a>
                          <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning p-2" rel="tooltip" data-original-title="" title="Edit"><i class="material-icons">edit</i></a>
                          <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">
                          @csrf
                          <input type="hidden" name="_method" value="delete">
                          <button type="submit" class="btn btn-danger p-2" onclick="return confirm('Are you sure you want to permanently DELETE Customer #{{ $customer->id }}?')" rel="tooltip" data-original-title="" title="Delete"><i class="material-icons">delete</i></button>
                          </form>
                        </td>
                      </tr>  
                    @endforeach
                  @endif
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
    $('#customers').DataTable();
  })
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