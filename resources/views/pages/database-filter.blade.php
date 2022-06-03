@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'database_filter', 'title' => __('Recruiting
Brain - Database')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-md-8">
                <h2 class="text-primary"><strong>Database</strong></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form method="post" action="{{ route('athlete_report') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    <div class="row" id="selectReport">
                        <div class="col-sm-7">
                            <div class="form-group{{ $errors->has('report_type') ? ' has-danger' : '' }}">
                                <label for="report_type">Select your report from the dropdown box below.</label>
                                <select class="selectpicker form-control" id="report_type" name="report_type" data-style="btn btn-primary text-white" required>
                                    <option value="">Select a Report</option>
                                    <option value="1">National Position Rankings</option>
                                    <option value="2">State Position Rankings</option>
                                    <option value="3">State Overall Rankings</option>
                                    <option value="4">State By City/School</option>
                                    <option value="5">National Commitments</option>
                                    <option value="6">National Top Offers</option>
                                    <option value="7">Contacts Report</option>
                                </select>
                                @if ($errors->has('report_type'))
                                <span id="report_type-error" class="error text-danger"
                                    for="report_type">{{ $errors->first('report_type') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row filters">
                        <div class="col-sm-7">
                            <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }} hide" id="filterState">
                                <select class="selectpicker form-control" id="state" name="state"
                                    data-style="btn btn-primary text-white">
                                    <option value="">Select State</option>
                                    @foreach ($states as $state)
                                    @if ($state->state && $state->state != '')
                                    <option value="{{ $state->state }}">{{ $state->state }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('state'))
                                <span id="state-error" class="error text-danger"
                                    for="state">{{ $errors->first('state') }}</span>
                                @endif
                            </div>

                            <div id="filterCityschool" class="hide">
                                <div class="form-group{{ $errors->has('city_school') ? ' has-danger' : '' }}">
                                    <select class="selectpicker form-control" id="city_school" name="city_school"
                                        data-style="btn btn-primary text-white">
                                        <option value="">Select City/School</option>
                                        @foreach ($cities as $city)
                                        <option value="{{ $city->city_school }}">{{ $city->city_school }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('city_school'))
                                    <span id="city_school-error" class="error text-danger"
                                        for="city_school">{{ $errors->first('city_school') }}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group{{ $errors->has('city_school_search') ? ' has-danger' : '' }}">
                                    <input class="form-control{{ $errors->has('city_school_search') ? ' is-invalid' : '' }}" name="city_school_search"
                                        id="input-city-school-search" type="text" placeholder="Type in the full or partial name of a school" value="{{ old('city_school_search') }}"/>
                                    @if ($errors->has('city_school_search'))
                                    <span id="city-school-search-error" class="error text-danger"
                                        for="input-city-school-search">{{ $errors->first('city_school_search') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('class') ? ' has-danger' : '' }} hide" id="filterClass">
                                <select class="selectpicker form-control" id="class" name="class"
                                    data-style="btn btn-primary text-white">
                                    <option value="">Select Class</option>
                                    <option value="All">All Classes</option>
                                    @foreach ($classes as $class)
                                    @if ($class->class && $class->class != '')
                                    <option value="{{ $class->class }}">{{ $class->class }}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('class'))
                                <span id="class-error" class="error text-danger"
                                    for="class">{{ $errors->first('class') }}</span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('position') ? ' has-danger' : '' }} hide" id="filterPosition">
                                <select class="selectpicker form-control" id="position" name="position"
                                    data-style="btn btn-primary text-white">
                                    <option value="">Projected College Position</option>
                                    <option value="QB">QB</option>
                                    <option value="RB">RB</option>
                                    <option value="WR">WR</option>
                                    <option value="TE">TE</option>
                                    <option value="OL">OL</option>
                                    <option value="DL">DL</option>
                                    <option value="LB">LB</option>
                                    <option value="DB">DB</option>
                                    <option value="PK">PK</option>
                                    <option value="P">P</option>
                                </select>
                                @if ($errors->has('position'))
                                <span id="position-error" class="error text-danger"
                                    for="position">{{ $errors->first('position') }}</span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('rating') ? ' has-danger' : '' }} hide" id="filterRating">
                                <select class="selectpicker form-control" id="rating" name="rating"
                                    data-style="btn btn-primary text-white">
                                    <option value="">Select Rating</option>
                                    <option value="All">All</option>
                                    <option value="5">5 Star</option>
                                    <option value="4">4 Star</option>
                                    <option value="3">3 Star</option>
                                    <option value="2">2 Star</option>
                                    <option value="1">1 Star</option>
                                </select>
                                @if ($errors->has('rating'))
                                <span id="rating-error" class="error text-danger"
                                    for="rating">{{ $errors->first('rating') }}</span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }} hide" id="filterAthlete">
                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                    id="input-name" type="text" placeholder="Type in the full or partial name of an athlete" value="{{ old('name') }}"/>
                                @if ($errors->has('name'))
                                <span id="name-error" class="error text-danger"
                                    for="input-name">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group hide" id="submit">
                                <button type="submit" class="btn btn-primary">Send Inquiry</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    $(document).ready(function() {
        $('#report_type').on('change', function(e) {
            $('.filters .selectpicker').each(function() {
                $(this).selectpicker('val', '')
            });
            $('.filters input[type="text"]').each(function() {
                $(this).val('')
            });
            var type = $(this).val();
            var filters = Array();

            switch (type) {
                case '1':
                    filters = Array('filterClass', 'filterPosition', 'filterRating', 'filterAthlete');
                    break;
                case '2':
                    filters = Array('filterState', 'filterClass', 'filterPosition', 'filterRating', 'filterAthlete');
                    break;
                case '3':
                    filters = Array('filterState', 'filterClass', 'filterAthlete');
                    break;
                case '4':
                    filters = Array('filterState', 'filterCityschool', 'filterClass', 'filterAthlete');
                    break;
                case '5':
                    filters = Array('filterClass', 'filterPosition', 'filterRating', 'filterAthlete');
                    break;
                case '6':
                    filters = Array('filterClass', 'filterPosition', 'filterRating', 'filterAthlete');
                    break;
                case '7':
                    filters = Array('filterState', 'filterCityschool', 'filterClass','filterRating', 'filterAthlete');
                    break;
            }
            
            var elements = Array('filterState', 'filterCityschool', 'filterClass', 'filterPosition', 'filterRating', 'filterAthlete');
            for (var i = 0; i < elements.length; i++) {
                var element = elements[i];
                if (filters.includes(element)) {
                    $('#' + element).addClass('show');
                    $('#' + element).removeClass('hide');
                } else {
                    $('#' + element).addClass('hide');
                    $('#' + element).addClass('show');
                }
            }

            $('#submit').removeClass('hide');
        });
    });
</script>    
@endpush