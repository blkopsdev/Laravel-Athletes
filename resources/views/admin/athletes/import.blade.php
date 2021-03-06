@extends('layouts.auth.app', ['activePage' => 'athletes.import', 'titlePage' => "Import Athletes"])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">{{ __('Dashboard') }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('athletes.index') }}">{{ __('Athletes') }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('Import Athlete') }}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ $title }}</h4>
                        {{-- <p class="card-category"></p> --}}
                    </div>
                    <div class="card-body ">
                        <form class="form" method="POST" action="{{ route('athletes.import') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 py-3">
                                    <!-- Basic Bootstrap File Input -->
                                    <input type="file" name="file" id="file">
                                </div>
                            </div>
                                
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer ml-auto mr-auto">
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
    toastr.success('{{ session('
        success ') }}', '{{ trans('
        app.success ') }}', toastr_options);
    @endif
    @if(session('error'))
    toastr.error('{{ session('
        error ') }}', '{{ trans('
        app.error ') }}', toastr_options);
    @endif

</script>
@endpush
