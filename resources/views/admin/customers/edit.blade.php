@extends('layouts.auth.app', ['activePage' => 'customers.edit', 'titlePage' => "Edit Customer"])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">{{ __('Dashboard') }}</a></li>
              <li class="breadcrumb-item">{{ __('customers') }}</li>
              <li class="breadcrumb-item"><a href="{{ route('customers.show', $customer->id) }}">{{ $customer->name }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('Edit') }}</li>
            </ol>
          </nav>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <form class="form" method="POST" action="{{ route('customers.update', $customer->id) }}">
            @csrf
            @method('put')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ $title }}</h4>
                <p class="card-category">{{ __('Customer information') }}</p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('First Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('first_name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" id="input-first-name" type="text" value="{{ old('first_name', $customer->first_name) }}" required="true" aria-required="true"/>
                      @if ($errors->has('first_name'))
                        <span id="first-name-error" class="error text-danger" for="input-first-name">{{ $errors->first('first_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Last Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" id="input-last-name" type="text" value="{{ old('last_name', $customer->last_name) }}" required="true" aria-required="true"/>
                      @if ($errors->has('last_name'))
                        <span id="last-name-error" class="error text-danger" for="input-last-name">{{ $errors->first('last_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" value="{{ old('email', $customer->email) }}" required="true" aria-required="true"/>
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Phone') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="input-phone" type="text" value="{{ old('phone', $customer->phone) }}" required />
                      @if ($errors->has('phone'))
                        <span id="phone-error" class="error text-danger" for="input-phone">{{ $errors->first('phone') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Street Address') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('street') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}" name="street" id="input-street" type="text" value="{{ old('street', $customer->street) }}"/>
                      @if ($errors->has('street'))
                        <span id="street-error" class="error text-danger" for="input-street">{{ $errors->first('street') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('City') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" id="input-city" type="text" value="{{ old('city', $customer->city) }}"/>
                      @if ($errors->has('city'))
                        <span id="city-error" class="error text-danger" for="input-city">{{ $errors->first('city') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('State') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" id="input-state" type="text" value="{{ old('state', $customer->state) }}" />
                      @if ($errors->has('state'))
                        <span id="state-error" class="error text-danger" for="input-state">{{ $errors->first('state') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('State') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                      @php
                        $selected_state = old('state') ? old('state') : $customer->state;
                      @endphp

                      <select class="selectpicker form-control" id="state" name="state" data-style="btn btn-primary text-white">
                        <option value="">Select State</option>
                        @foreach ($states as $state)
                        <option value="{{ $state->code }}" {{ $selected_state == $state->code ? 'selected' : '' }}>{{ $state->code }}</option>
                        @endforeach
                      </select>
                      @if ($errors->has('state'))
                        <span id="state-error" class="error text-danger" for="input-state">{{ $errors->first('state') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('State Alternative') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('state_alt') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('state_alt') ? ' is-invalid' : '' }}" name="state_alt" id="input-state-alt" type="text" value="{{ old('state_alt', $customer->state_alt) }}" />
                      @if ($errors->has('state_alt'))
                        <span id="state-alt-error" class="error text-danger" for="input-state-alt">{{ $errors->first('state_alt') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Zip/Postal Code') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('zip') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('zip') ? ' is-invalid' : '' }}" name="zip" id="input-zip" type="text" value="{{ old('zip', $customer->zip) }}" />
                      @if ($errors->has('zip'))
                        <span id="zip-error" class="error text-danger" for="input-zip">{{ $errors->first('zip') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Country') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                      @php
                        $selected_country = old('country') ? old('country') : $customer->country;
                      @endphp

                      <select class="selectpicker form-control" id="country" name="country" data-style="btn btn-primary text-white" required>
                        <option value="">Select country</option>
                        <option value="United State" {{ $selected_country == 'United State' ? 'selected' : '' }}>United State</option>
                        @foreach ($countries as $country)
                        <option value="{{ $country->country }}" {{ $selected_country == $country->country ? 'selected' : '' }}>{{ $country->country }}</option>
                        @endforeach
                      </select>
                      @if ($errors->has('country'))
                        <span id="country-error" class="error text-danger" for="input-country">{{ $errors->first('country') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>

<script>
  $(document).ready(function() {
    CKEDITOR.inline('synopsis');
    CKEDITOR.inline('national_honors');
    CKEDITOR.inline('other_rankings');
    CKEDITOR.inline('junior_local_honors');
    CKEDITOR.inline('sophomore_local_honors');
    CKEDITOR.inline('freshman_local_ranking');
    CKEDITOR.inline('other_comments');
    CKEDITOR.inline('news_and_notes');
    CKEDITOR.inline('top_offers');
    CKEDITOR.inline('links');
    CKEDITOR.inline('contact_information');
    CKEDITOR.inline('combines');
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