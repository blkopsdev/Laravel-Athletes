@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Recruiting Brain')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row mb-5">
        <div class="col-md-8">
          <img src="{{ asset('assets/img/home.jpg') }}" alt="">
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 text-primary">
          <p>Our vision at Recruiting Brain is to be the primary contact and authority of our clients when it comes to identifying college football prospects.</p>
          <h3><strong>The Recruiting Brain Provides Clients With</strong></h3>
          <ul class="pl-2 list-unstyled">
            <li class="my-2"><a href="">Prospect Identification</a></li>
            <li class="my-2"><a href="">Preliminary Prospect Evaluation</a></li>
            <li class="my-2"><a href="">The Most Comprehensive Recruiting Database</a></li>
            <li class="my-2"><a href="">Information on a Timely Basis</a></li>
            <li class="my-2"><a href="">Reports</a></li>
            <li class="my-2"><a href="">Community</a></li>
            <li class="my-2"><a href="">Exclusivity</a></li>
          </ul> <br/>
          <p>The database is now open to college coaches on a trial basis without any fees. Just click on Subscribe to register for a trial free access.</p>
          <p>This recruiting/scouting service has been approved in accordance with NCAA bylaws, policies and procedures.  NCAA Division I football and/or basketball coaches are permitted to subscribe to this recruiting/scouting service. </p>
          <p>To confirm approval, NCAA compliance officers and coaches may find this service on the list of approvals linked below.  This link requires an NCAA login and is not available to the public. <a href="https://sso.ncaa.org/login?service=http%3A%2F%2Fweb2.ncaa.org%2Fscouting%2Fschool_search"><strong>CLICK HERE</strong></a></p>
          <p>We have video links for over 95% of our top 5000 Class of 2024 prospects and social media links for over 90% of our top 5000 Class of 2024 prospects.</p>
          <p>On April 20, 2022 we made our final exhaustive update for the Class of 2024.  We will continue to periodically update the class rankings and verbal commitments, but will no longer update offers or statistics for the Class of 2024 as our primary focus is now on younger prospects.</p>
        </div>
      </div>
    </div>
  </div>
@endsection