@extends('layouts.app', ['activePage' => 'athletes.edit', 'titlePage' => "Edit Athlete"])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">{{ __('Dashboard') }}</a></li>
              <li class="breadcrumb-item"><a href="{{ route('athletes.index') }}">{{ __('Athletes') }}</a></li>
              <li class="breadcrumb-item"><a href="{{ route('athletes.show', $athlete->id) }}">{{ $athlete->name }}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ __('Edit') }}</li>
            </ol>
          </nav>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <form class="form" method="POST" action="{{ route('athletes.update', $athlete->id) }}">
            @csrf
            @method('put')
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ $title }}</h4>
                <p class="card-category">{{ __('Athlete information') }}</p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" value="{{ old('name', $athlete->name) }}" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Position') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('position') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" id="input-position" type="text" value="{{ old('position', $athlete->position) }}" required />
                      @if ($errors->has('position'))
                        <span id="position-error" class="error text-danger" for="input-position">{{ $errors->first('position') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Height') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('height') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('height') ? ' is-invalid' : '' }}" name="height" id="input-height" type="text" value="{{ old('height', $athlete->height) }}"/>
                      @if ($errors->has('height'))
                        <span id="height-error" class="error text-danger" for="input-height">{{ $errors->first('height') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Weight') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('weight') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('weight') ? ' is-invalid' : '' }}" name="weight" id="input-weight" type="text" value="{{ old('weight', $athlete->weight) }}"/>
                      @if ($errors->has('weight'))
                        <span id="weight-error" class="error text-danger" for="input-weight">{{ $errors->first('weight') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Forty') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('forty') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('forty') ? ' is-invalid' : '' }}" name="forty" id="input-forty" type="text" value="{{ old('forty', $athlete->forty) }}" />
                      @if ($errors->has('forty'))
                        <span id="forty-error" class="error text-danger" for="input-forty">{{ $errors->first('forty') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('City School') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('city_school') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('city_school') ? ' is-invalid' : '' }}" name="city_school" id="input-city-school" type="text" value="{{ old('city_school', $athlete->city_school) }}" />
                      @if ($errors->has('city-school'))
                        <span id="city-school-error" class="error text-danger" for="input-city-school">{{ $errors->first('city_school') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('State') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" id="input-state" type="text" value="{{ old('state', $athlete->state) }}" />
                      @if ($errors->has('state'))
                        <span id="state-error" class="error text-danger" for="input-state">{{ $errors->first('state') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('College Commitment') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('college_commitment') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('college_commitment') ? ' is-invalid' : '' }}" name="college_commitment" id="input-college-commitment" type="text" value="{{ old('college_commitment', $athlete->college_commitment) }}" />
                      @if ($errors->has('college_commitment'))
                        <span id="college-commitment-error" class="error text-danger" for="input-college-commitment">{{ $errors->first('college_commitment') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Synopsis') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group p-0 border-bottom{{ $errors->has('synopsis') ? ' has-danger' : '' }}">
                      <textarea class="form-control{{ $errors->has('synopsis') ? ' is-invalid' : '' }}" name="synopsis" id="input-synopsis" rows="5">{{ old('synopsis', $athlete->synopsis) }}</textarea>
                      @if ($errors->has('synopsis'))
                        <span id="synopsis-error" class="error text-danger" for="input-synopsis">{{ $errors->first('synopsis') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('National Honors') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group p-0 border-bottom{{ $errors->has('national_honors') ? ' has-danger' : '' }}">
                      <textarea class="form-control{{ $errors->has('national_honors') ? ' is-invalid' : '' }}" name="national_honors" id="input-national-honors" rows="5">{{ old('national_honors', $athlete->national_honors) }}</textarea>
                      @if ($errors->has('national_honors'))
                        <span id="national-honors-error" class="error text-danger" for="input-national-honors">{{ $errors->first('national_honors') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Other Rankings') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group p-0 border-bottom{{ $errors->has('other_rankings') ? ' has-danger' : '' }}">
                      <textarea class="form-control{{ $errors->has('other_rankings') ? ' is-invalid' : '' }}" name="other_rankings" id="input-other-rankings" rows="5">{{ old('other_rankings', $athlete->other_rankings) }}</textarea>
                      @if ($errors->has('other_rankings'))
                        <span id="other-rankings-error" class="error text-danger" for="input-other-rankings">{{ $errors->first('other_rankings') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Junior Local Honors') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group p-0 border-bottom{{ $errors->has('junior_local_honors') ? ' has-danger' : '' }}">
                      <textarea class="form-control{{ $errors->has('junior_local_honors') ? ' is-invalid' : '' }}" name="junior_local_honors" id="input-junior-local-honors" rows="5">{{ old('junior_local_honors', $athlete->junior_local_honors) }}</textarea>
                      @if ($errors->has('junior_local_honors'))
                        <span id="junior-local-honors-error" class="error text-danger" for="input-junior-local-honors">{{ $errors->first('junior_local_honors') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Sophomore Local Honors') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group p-0 border-bottom{{ $errors->has('sophomore_local_honors') ? ' has-danger' : '' }}">
                      <textarea class="form-control{{ $errors->has('sophomore_local_honors') ? ' is-invalid' : '' }}" name="sophomore_local_honors" id="input-sophomore-local-honors" rows="5">{{ old('sophomore_local_honors', $athlete->sophomore_local_honors) }}</textarea>
                      @if ($errors->has('sophomore_local_honors'))
                        <span id="sophomore-local-honors-error" class="error text-danger" for="input-sophomore-local-honors">{{ $errors->first('sophomore_local_honors') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Freshman Local Honers') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group p-0 border-bottom{{ $errors->has('freshman_local_ranking') ? ' has-danger' : '' }}">
                      <textarea class="form-control{{ $errors->has('freshman_local_ranking') ? ' is-invalid' : '' }}" name="freshman_local_ranking" id="input-freshman-local-ranking" rows="5">{{ old('freshman_local_ranking', $athlete->freshman_local_ranking) }}</textarea>
                      @if ($errors->has('freshman_local_ranking'))
                        <span id="freshman-local-ranking-error" class="error text-danger" for="input-freshman-local-ranking">{{ $errors->first('freshman_local_ranking') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Combines') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group p-0 border-bottom{{ $errors->has('combines') ? ' has-danger' : '' }}">
                      <textarea class="form-control{{ $errors->has('combines') ? ' is-invalid' : '' }}" name="combines" id="input-combines" rows="5">{{ old('combines', $athlete->combines) }}</textarea>
                      @if ($errors->has('combines'))
                        <span id="combines-error" class="error text-danger" for="input-combines">{{ $errors->first('combines') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Other Comments') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group p-0 border-bottom{{ $errors->has('other_comments') ? ' has-danger' : '' }}">
                      <textarea class="form-control{{ $errors->has('other_comments') ? ' is-invalid' : '' }}" name="other_comments" id="input-other-comments" rows="5">{{ old('other_comments', $athlete->other_comments) }}</textarea>
                      @if ($errors->has('other_comments'))
                        <span id="other-comments-error" class="error text-danger" for="input-other-comments">{{ $errors->first('other_comments') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('News And Notes') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group p-0 border-bottom{{ $errors->has('news_and_notes') ? ' has-danger' : '' }}">
                      <textarea class="form-control{{ $errors->has('news_and_notes') ? ' is-invalid' : '' }}" name="news_and_notes" id="input-news-and-notes" rows="5">{{ old('news_and_notes', $athlete->news_and_notes) }}</textarea>
                      @if ($errors->has('news_and_notes'))
                        <span id="news-and-notes-error" class="error text-danger" for="input-news-and-notes">{{ $errors->first('news_and_notes') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Top Offers') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group p-0 border-bottom{{ $errors->has('top_offers') ? ' has-danger' : '' }}">
                      <textarea class="form-control{{ $errors->has('top_offers') ? ' is-invalid' : '' }}" name="top_offers" id="input-top-offers" rows="5">{{ old('top_offers', $athlete->top_offers) }}</textarea>
                      @if ($errors->has('top_offers'))
                        <span id="top-offers-error" class="error text-danger" for="input-top-offers">{{ $errors->first('top_offers') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Projected College Position') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('projected_college_position') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('projected_college_position') ? ' is-invalid' : '' }}" name="projected_college_position" id="input-projected-college-position" type="text" value="{{ old('projected_college_position', $athlete->projected_college_position) }}" />
                      @if ($errors->has('projected_college_position'))
                        <span id="projected-college-position-error" class="error text-danger" for="input-projected-college-position">{{ $errors->first('projected_college_position') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('National Ranking Position') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('national_ranking_position') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('national_ranking_position') ? ' is-invalid' : '' }}" name="national_ranking_position" id="input-national-ranking-position" type="text" value="{{ old('national_ranking_position', $athlete->national_ranking_position) }}" />
                      @if ($errors->has('national_ranking_position'))
                        <span id="national-ranking-position-error" class="error text-danger" for="input-national-ranking-position">{{ $errors->first('national_ranking_position') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('State Ranking') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('state_ranking') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('state_ranking') ? ' is-invalid' : '' }}" name="state_ranking" id="input-state-ranking" type="text" value="{{ old('state_ranking', $athlete->state_ranking) }}" />
                      @if ($errors->has('state_ranking'))
                        <span id="state-ranking-error" class="error text-danger" for="input-state-ranking">{{ $errors->first('state_ranking') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Rating') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('rating') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('rating') ? ' is-invalid' : '' }}" name="rating" id="input-rating" type="text" value="{{ old('rating', $athlete->rating) }}" />
                      @if ($errors->has('rating'))
                        <span id="rating-error" class="error text-danger" for="input-rating">{{ $errors->first('rating') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Class') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('class') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('class') ? ' is-invalid' : '' }}" name="class" id="input-class" type="text" value="{{ old('class', $athlete->class) }}" />
                      @if ($errors->has('class'))
                        <span id="class-error" class="error text-danger" for="input-class">{{ $errors->first('class') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Links') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group p-0 border-bottom{{ $errors->has('links') ? ' has-danger' : '' }}">
                      <textarea class="form-control{{ $errors->has('links') ? ' is-invalid' : '' }}" name="links" id="input-links" rows="5">{{ old('links', $athlete->links) }}</textarea>
                      @if ($errors->has('links'))
                        <span id="links-error" class="error text-danger" for="input-links">{{ $errors->first('links') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label d-flex align-items-center">{{ __('Contact Information') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group p-0 border-bottom{{ $errors->has('contact_information') ? ' has-danger' : '' }}">
                      <textarea class="form-control{{ $errors->has('contact_information') ? ' is-invalid' : '' }}" name="contact_information" id="input-contact-information" rows="5">{{ old('contact_information', $athlete->contact_information) }}</textarea>
                      @if ($errors->has('contact_information'))
                        <span id="contact-information-error" class="error text-danger" for="input-contact-information">{{ $errors->first('contact_information') }}</span>
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