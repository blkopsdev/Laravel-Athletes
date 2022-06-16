@extends('layouts.auth.app', ['activePage' => 'customer.show', 'titlePage' => __('customer Detail')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">{{ __('Dashboard') }}</a></li>
              <li class="breadcrumb-item">{{ __('Customers') }}</li>
              <li class="breadcrumb-item active" aria-current="page">{{ $customer->name }}</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h2>{{ __('ID: ') . $customer->id }} | {{ $customer->first_name }} {{ $customer->last_name }}
          </h2>
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-end">
          <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary btn-rounded ml-3" rel="tooltip" data-original-title="" title="{{ __('Edit') }}"><i class="material-icons mr-2">edit</i>{{ __('Edit') }}</a>
            @if (auth()->user()->role == "admin")
            <form action="{{ route('customers.destroy',$customer->id) }}" method="POST" class="mb-1">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-rounded ml-3" onclick="return confirm('All transactions linked to this customer will be deleted. Are you sure you want to permanently DELETE customer #{{ $customer->id }}?')" rel="tooltip" data-original-title="" title="{{ __('Delete') }}">
                <i class="material-icons mr-2">delete</i>
                Delete</button>
            </form>
            @endif
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="client-info">
            <div class="card mt-5 pb-3">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('customer Information') }}</h4>
              </div>
              <div class="card-body">
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <th style="min-width: 200px">ID:</th>
                      <td>{{ $customer->id }}</td>
                    </tr>
                    <tr>
                      <th style="min-width: 200px">Username:</th>
                      <td>{{ $customer->username }}</td>
                    </tr>
                    <tr>
                      <th style="min-width: 200px">First Name:</th>
                      <td>{{ $customer->first_name }}</td>
                    </tr>
                    <tr>
                      <th style="min-width: 200px">Last Name:</th>
                      <td>{{ $customer->last_name }}</td>
                    </tr>
                    <tr>
                      <th style="min-width: 200px">Email:</th>
                      <td>{{ $customer->email }}</td>
                    </tr>
                    <tr>
                      <th style="min-width: 200px">Phone:</th>
                      <td>{{ $customer->phone }}</td>
                    </tr>
                    <tr>
                      <th style="min-width: 200px">Address:</th>
                      <td>{{ $customer->street }}</td>
                    </tr>
                    <tr>
                      <th style="min-width: 200px">City:</th>
                      <td>{{ $customer->city }}</td>
                    </tr>
                    <tr>
                      <th style="min-width: 200px">State:</th>
                      <td>{{ $customer->state }}</td>
                    </tr>
                    @if ($customer->state_alt != NULL)
                    <tr>
                      <th style="min-width: 200px">State Alt:</th>
                      <td>{{ $customer->state_alt }}</td>
                    </tr>
                    @endif
                    <tr>
                      <th style="min-width: 200px">Zip:</th>
                      <td>{{ $customer->zip }}</td>
                    </tr>
                    <tr>
                      <th></th>
                      <td></td>
                    </tr>
                    @if ($classes)
                    <tr>
                      <th style="min-width: 200px">Athlete State Access:</th>
                      <td>{{ implode(', ', json_decode($classes->class_access)) }}</td>
                    </tr>  
                    @endif
                    @if ($states)
                    <tr>
                      <th style="min-width: 200px">Athlete State Access:</th>
                      <td>{{ ucwords(implode(', ', json_decode($states->state_access))) }}</td>
                    </tr>  
                    @endif
                  </tbody>
                </table>
              </div>
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