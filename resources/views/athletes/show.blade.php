@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'athlete_show', 'title' => __('Recruiting
Brain - Athlete Information')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <h2>{{ $athlete->name }}
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="client-info">
            <div class="card mt-5 pb-3">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Athlete Information') }}</h4>
              </div>
              <div class="card-body">
                <table class="table table-striped">
                  <tbody>
                    @foreach (json_decode(json_encode($athlete)) as $key => $value)
                      @if ($value && $key != 'created_at' && $key != 'updated_at' && $key != 'token' && $key != 'id')
                        <tr>
                          <th style="min-width: 200px">{{ ucwords(str_replace('_', ' ', $key)) }}:</th>
                          <td>{!! $value !!}</td>
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