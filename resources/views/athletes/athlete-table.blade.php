@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => '', 'title' => __('Recruiting Brain -
Athlete Report')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-md-8">
                <h2 class="text-primary"><strong>{{ $title }}</strong></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover table-responsive" id="athletes">
                    <thead class="text-primary">
                        <th>Name</th>
                        <th>Pos-Coll</th>
                        <th>Height</th>
                        <th>Weight</th>
                        <th>Forty</th>
                        <th>City/School</th>
                        <th>State</th>
                        <th>College Commitment</th>
                        <th>National Ranking</th>
                        <th>State Ranking</th>
                        <th>Ranting</th>
                        <th>Academics/Top Offers</th>
                        <th>Video Links</th>
                        <th>Class</th>
                    </thead>
                    <tbody>
                        <td></td>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
$(document).ready(function() {
    $('#athletes').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            "url": "{{ url('athletes_report_ajax') }}",
            "data": function ( d ) {
                return $.extend( {}, d, {
                    "report" : "{{ $data['report'] }}",
                    "state" : "{{ $data['state'] }}",
                    "city_school" : "{{ $data['city_school'] }}",
                    "city_school_search" : "{{ $data['city_school_search'] }}",
                    "class" : "{{ $data['class'] }}",
                    "position" : "{{ $data['position'] }}",
                    "rating" : "{{ $data['rating'] }}",
                    "name" : "{{ $data['name'] }}"
                } );
            }
        },

        columns: [
            {data: 'athlete_name', name: 'name'},
            {data: 'position', name: 'pos_coll', orderable: false},
            {data: 'height', name: 'height'},
            {data: 'weight', name: 'weight'},
            {data: 'forty', name: 'Forty'},
            {data: 'city_school', name: 'city_school'},
            {data: 'state', name: 'state'},
            {data: 'college_commitment', name: 'college_commitment'},
            {data: 'national_ranking', name: 'national_ranking'},
            {data: 'state_ranking', name: 'state_ranking'},
            {data: 'rating', name: 'rating'},
            {data: 'top_offers', name: 'academics/top_offers', orderable: false},
            {data: 'links', name: 'video_links', orderable: false},
            {data: 'class', name: 'class'}
        ],
        "order": [[ 0, "desc" ]]
    })
});
</script>

@endpush