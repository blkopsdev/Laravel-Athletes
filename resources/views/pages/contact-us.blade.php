@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'contact_us', 'title' => __('Recruiting Brain - Contact Us')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row mb-3">
        <div class="col-md-8">
            <h2 class="text-primary"><strong>Contact Us</strong></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <p>To contact The Recruiting Brain, please complete the inquiry form below.</p>

          <form method="post" action="{{ route('contact_post') }}" autocomplete="off" class="form-horizontal">
            @csrf
            {{-- @method('PUT') --}}
            
            <div class="row">
              {{-- <label class="col-sm-2 col-form-label">@lang('app.name')</label> --}}
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="Your Name" value="{{ old('name') }}" required="true" aria-required="true"/>
                  @if ($errors->has('name'))
                    <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              {{-- <label class="col-sm-2 col-form-label">@lang('app.email')</label> --}}
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="Your Email" value="{{ old('email') }}" required />
                  @if ($errors->has('email'))
                    <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              {{-- <label class="col-sm-2 col-form-label">{{ __('User Type') }}</label> --}}
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('submission_type') ? ' has-danger' : '' }}">
                  <select class="selectpicker form-control" id="submission_type" name="submission_type" data-style="btn btn-primary text-white" required>
                    <option value="">Select Submission Type</option>
                    @foreach ($submission_types as $type)
                    <option value="{{ $type->id }}" {{  old('submission_type') == $type->id ? 'selected' : '' }}>{{ $type->type }}</option>
                    @endforeach
                  </select>
                  @if ($errors->has('submission_type'))
                    <span id="submission_type-error" class="error text-danger" for="input-submission_type">{{ $errors->first('submission_type') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('subject') ? ' has-danger' : '' }}">
                  <input class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" id="input-subject" type="subject" placeholder="Subject" value="{{ old('subject') }}" required />
                  @if ($errors->has('subject'))
                    <span id="subject-error" class="error text-danger" for="input-subject">{{ $errors->first('subject') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-7">
                <div class="form-group{{ $errors->has('message') ? ' has-danger' : '' }}">
                  <textarea name="message" id="message" class="form-control{{  $errors->has('message') ? ' is-invalid' : ''  }}" cols="30" rows="10" placeholder="Type your message" required>{{ old('message') }}</textarea>
                  @if ($errors->has('message'))
                    <span id="message-error" class="error text-danger" for="input-message">{{ $errors->first('message') }}</span>
                  @endif
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Send Inquiry</button>
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