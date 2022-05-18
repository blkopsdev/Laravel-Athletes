@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'marketing', 'title' => __('Recruiting Brain - Recruit Marketing')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row mb-3">
        <div class="col-md-8">
            <h2 class="text-primary"><strong>Recruit Marketing</strong></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <ul class="list-unstyled text-primary">
            <li class="my-2"><a href="http://coaches.csaprepstar.com/#directory" target="_blank">CSA PrepStar</a></li>
            <li class="my-2"><a href="http://www.pacificathleticalliance.com/" target="_blank">Pacific Islands Athletic Alliance</a></li>
            <li class="my-2"><a href="http://www.scoutingohio.com/" target="_blank">Ohio: ScoutingOhio.com</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection