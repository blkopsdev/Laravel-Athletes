@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'subscribe', 'title' => __('Recruiting Brain - subscribe')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row mb-3">
        <div class="col-md-8">
            <h2 class="text-primary"><strong>Register</strong></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <p>This is a service provided exclusively for college football staffs.  If you are not a member of a college football staff please do not proceed with registration.  Registration to the site will only be approved for those individuals who have been independently verified as working in a college football department.  Attempts to subscribe using e-mail addresses that are not official university e-mail addresses will be IGNORED.</p>

          <p>Please enter your information below to register for access to special features on this website.</p>

          <form method="post" action="{{ route('subscribes.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            <div class="row">
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('first_name') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" id="input-first-name" type="text" placeholder="First Name" value="{{ old('first_name') }}" required="true" aria-required="true"/>
                  @if ($errors->has('first_name'))
                    <span id="first-name-error" class="error text-danger" for="input-first-name">{{ $errors->first('first_name') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" id="input-last-name" type="text" placeholder="Last Name" value="{{ old('last_name') }}" required="true" aria-required="true"/>
                  @if ($errors->has('last_name'))
                    <span id="last-name-error" class="error text-danger" for="input-last-name">{{ $errors->first('last_name') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="Email" value="{{ old('email') }}" required />
                  @if ($errors->has('email'))
                    <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="input-phone" type="text" placeholder="Phone Number" value="{{ old('phone') }}" required />
                  @if ($errors->has('phone'))
                    <span id="phone-error" class="error text-danger" for="input-phone">{{ $errors->first('phone') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('street') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" name="street" id="input-street" type="text" placeholder="Street Address" value="{{ old('street') }}" required />
                  @if ($errors->has('street'))
                    <span id="street-error" class="error text-danger" for="input-street">{{ $errors->first('street') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" id="input-city" type="text" placeholder="City" value="{{ old('city') }}" required />
                  @if ($errors->has('city'))
                    <span id="city-error" class="error text-danger" for="input-city">{{ $errors->first('city') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                  <select class="selectpicker form-control" id="state" name="state" data-style="btn btn-primary text-white">
                    <option value="">Select State</option>
                    @foreach ($states as $state)
                    <option value="{{ $state->code }}" {{ old('state') == $state->code ? 'selected' : '' }}>{{ $state->code }}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('state'))
                    <span id="state-error" class="error text-danger" for="input-state">{{ $errors->first('state') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('state_alt') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('state_alt') ? ' is-invalid' : '' }}" name="state_alt" id="input-state-alt" type="text" placeholder="State Alternative" value="{{ old('state_alt') }}"/>
                  @if ($errors->has('state_alt'))
                    <span id="state-alt-error" class="error text-danger" for="input-state-alt">{{ $errors->first('state_alt') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                  <select class="selectpicker form-control" id="country" name="country" data-style="btn btn-primary text-white" required>
                    <option value="">Select country</option>
                    <option value="United State" {{ old('country') == 'United State' ? 'selected' : '' }}>United State</option>
                    @foreach ($countries as $country)
                    <option value="{{ $country->country }}" {{ old('country') == $country->country ? 'selected' : '' }}>{{ $country->country }}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('country'))
                    <span id="country-error" class="error text-danger" for="input-country">{{ $errors->first('country') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('zip') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('zip') ? ' is-invalid' : '' }}" name="zip" id="input-zip" type="text" placeholder="Zip/Postal Code" value="{{ old('zip') }}" required />
                  @if ($errors->has('zip'))
                    <span id="zip-error" class="error text-danger" for="input-zip">{{ $errors->first('zip') }}</span>
                  @endif
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('username') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" id="input-username" type="text" placeholder="Username" value="{{ old('username') }}" required />
                  @if ($errors->has('username'))
                    <span id="username-error" class="error text-danger" for="input-username">{{ $errors->first('username') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="Password" value="{{ old('password') }}" required />
                  @if ($errors->has('password'))
                    <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="Verify Password" value="{{ old('password_confirmation') }}" required />
                  @if ($errors->has('password_confirmation'))
                    <span id="password-confirmation-error" class="error text-danger" for="input-password-confirmation">{{ $errors->first('password_confirmation') }}</span>
                  @endif
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('terms') ? ' has-danger' : '' }}">
                  <input class="{{ $errors->has('terms') ? ' is-invalid' : '' }}" name="terms" id="input-terms" type="checkbox" required />
                  <label for="input-terms" class="disable-select">Please check the box to indicate that you have read and agree to our Terms of Use policy.</label>
                  @if ($errors->has('terms'))
                    <span id="terms-error" class="error text-danger" for="input-terms">{{ $errors->first('terms') }}</span>
                  @endif
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Create Account</button>
          </form>
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