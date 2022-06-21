@extends('layouts.auth.app', ['activePage' => 'contact.config', 'titlePage' => __('Contact Messages')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">{{ __('Dashboard') }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('Contact Email Configuration') }}</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h2>{{ $title }}</h2>
        </div>
      </div>
      <form class="form" method="POST" action="{{ route('contact.config_store') }}">
        @csrf
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Email Configuration:') }}</h4>
              </div>
              <div class="card-body table-responsive">
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Admin Email Address') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('mail_from_address') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('mail_from_address') ? ' is-invalid' : '' }}" name="mail_from_address" id="input-mail-from-address" type="text" value="{{ old('mail_from_address', get_option('mail_from_address')) }}" placeholder="admin@recruitingbrain.com" required="true" aria-required="true"/>
                      @if ($errors->has('mail_from_address'))
                        <span id="input-mail-from-address-error" class="error text-danger" for="input-input-mail-from-address">{{ $errors->first('mail_from_address') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Mail From Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('mail_from_name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('mail_from_name') ? ' is-invalid' : '' }}" name="mail_from_name" id="input-mail-from-name" type="text" value="{{ old('mail_from_name', get_option('mail_from_name')) }}" placeholder="Recruiting Brain" required="true" aria-required="true"/>
                      @if ($errors->has('mail_from_name'))
                        <span id="mail-from-name-error" class="error text-danger" for="input-mail-from-name">{{ $errors->first('mail_from_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-7 offset-sm-2">
                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <form class="form" method="POST" action="{{ route('contact.config_store') }}">
        @csrf
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('SMTP Configuration:') }}</h4>
              </div>
              <div class="card-body table-responsive">
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('SMTP Host') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('smtp_host') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('smtp_host') ? ' is-invalid' : '' }}" name="smtp_host" id="input-smtp-host" type="text" value="{{ old('smtp_host', get_option('smtp_host')) }}" placeholder="smtp.google.com" required="true" aria-required="true"/>
                      @if ($errors->has('smtp_host'))
                        <span id="smtp-host-error" class="error text-danger" for="input-smtp-host">{{ $errors->first('smtp_host') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('SMTP Username') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('smtp_username') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('smtp_username') ? ' is-invalid' : '' }}" name="smtp_username" id="input-smtp-username" type="text" value="{{ old('smtp_username', get_option('smtp_username')) }}" placeholder="email@gmail.com" required="true" aria-required="true"/>
                      @if ($errors->has('smtp_username'))
                        <span id="smtp-username-error" class="error text-danger" for="input-smtp-username">{{ $errors->first('smtp_username') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('SMTP Password') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('smtp_password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('smtp_password') ? ' is-invalid' : '' }}" name="smtp_password" id="input-smtp-password" type="password" value="{{ old('smtp_password', get_option('smtp_password')) }}" placeholder="Password" required="true" aria-required="true"/>
                      @if ($errors->has('password'))
                        <span id="smtp-password-error" class="error text-danger" for="input-smtp-password">{{ $errors->first('smtp_password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('SMTP Port') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('smtp_port') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('smtp_port') ? ' is-invalid' : '' }}" name="smtp_port" id="input-smtp-port" type="text" value="{{ old('smtp_port', get_option('smtp_port')) }}" placeholder="587 or 465" required="true" aria-required="true"/>
                      @if ($errors->has('smtp_port'))
                        <span id="smtp-port-error" class="error text-danger" for="input-smtp-port">{{ $errors->first('smtp_port') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('SMTP Encryption') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('smtp_encryption') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('smtp_encryption') ? ' is-invalid' : '' }}" name="smtp_encryption" id="input-smtp-encryption" type="text" value="{{ old('smtp_encryption', get_option('smtp_encryption')) }}" placeholder="TLS or SSL" required="true" aria-required="true"/>
                      @if ($errors->has('smtp_encryption'))
                        <span id="smtp-encryption-error" class="error text-danger" for="input-smtp-encryption">{{ $errors->first('smtp_encryption') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-7 offset-sm-2">
                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
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