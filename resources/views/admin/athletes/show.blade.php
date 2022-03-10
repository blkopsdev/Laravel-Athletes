@extends('layouts.app', ['activePage' => 'athlete.show', 'titlePage' => __('athlete Detail')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">{{ __('Dashboard') }}</a></li>
              <li class="breadcrumb-item"><a href="{{ route('athletes.index') }}">{{ __('Athletes') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('Athlete Detail') }}</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h2>{{ __('ID: ') . $athlete->id }} | {{ $athlete->name }}
          </h2>
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-end">
          <a href="{{ route('athletes.edit', $athlete->id) }}" class="btn btn-primary btn-rounded ml-3" rel="tooltip" data-original-title="" title="{{ __('Edit') }}"><i class="material-icons mr-2">edit</i>{{ __('Edit') }}</a>
            @if (auth()->user()->role == "admin")
            <form action="{{ route('athletes.destroy',$athlete->id) }}" method="POST" class="mb-1">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-rounded ml-3" onclick="return confirm('All transactions linked to this athlete will be deleted. Are you sure you want to permanently DELETE athlete #{{ $athlete->id }}?')" rel="tooltip" data-original-title="" title="{{ __('Delete') }}">
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
              <div class="card-header card-header-warning">
                <h4 class="card-title">{{ __('Athlete Information') }}</h4>
              </div>
              <div class="card-body">
                <table class="table table-striped">
                  <tbody>
                    @foreach (json_decode(json_encode($athlete)) as $key => $value)
                      @if ($value && $key != 'created_at' && $key != 'updated_at' && $key != 'token')
                        <tr>
                          <th style="min-width: 200px">{{ ucfirst(str_replace('_', ' ', $key)) }}:</th>
                          <td>{{ $value }}</td>
                        </tr>
                      @endif
                    @endforeach
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