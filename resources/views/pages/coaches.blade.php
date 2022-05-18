@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'coaches', 'title' => __('Recruiting Brain - Sites for Coaches')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row mb-3">
        <div class="col-md-8">
            <h2 class="text-primary"><strong>Sites for Coaches</strong></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <ul class="list-unstyled text-primary">
            <li class="my-2"><a href="http://www.ncaa.org/wps/portal" target="_blank">NCAA.org </a></li>
            <li class="my-2"><a href="http://www2.ncaa.org/portal/legislation_and_governance/eligibility_and_recruiting/recruiting.html" target="_blank">NCAA.org Recruiting Guide  </a></li>
            <li class="my-2"><a href="http://www.afca.com/" target="_blank">American Football Coaches Association</a></li>
            <li class="my-2"><a href="http://www.footballcoachingsites.com/main/default.asp" target="_blank">FootballCoachingSites.com</a></li>
            <li class="my-2"><a href="http://www.footballandcoaching.com/" target="_blank">Football and Coaching</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection