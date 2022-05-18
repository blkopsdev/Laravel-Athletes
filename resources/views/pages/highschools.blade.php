@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'highschools', 'title' => __('Recruiting Brain - High School Sites')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row mb-3">
        <div class="col-md-8">
            <h2 class="text-primary"><strong>High School Sites</strong></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <ul class="list-unstyled text-primary">
            <li class="my-2"><a href="http://www.nflhs.com/" target="_blank">NFLHS.COM</a></li>
            <li class="my-2"><a href="http://www.risemag.com/main.cfm" target="_blank">Rise Magazine</a></li>
            <li class="my-2"><a href="http://ar.prepcountry.com/" target="_blank">Arkansas: PrepCountry.com</a></li>
            <li class="my-2"><a href="http://floridafb.com/" target="_blank">Florida: VSM Florida Football</a></li>
            <li class="my-2"><a href="http://www.gridirondigest.com/" target="_blank">Indiana: Indiana Gridiron Digest</a></li>
            <li class="my-2"><a href="https://thebobwire.blogspot.com/" target="_blank">Indiana: The BobWire</a></li>
            <li class="my-2"><a href="http://www.bluegrasspreps.com/" target="_blank">Kentucky: BluegrassPreps.com</a></li>
            <li class="my-2"><a href="http://nevadaprep.com/index.php" target="_blank">Nevada: NevadaPrep.com</a></li>
            <li class="my-2"><a href="http://www.msasportsnetwork.com/default.asp" target="_blank">Pennsylvania: MSA Sports Network</a></li>
            <li class="my-2"><a href="http://tennessee.coacht.com/" target="_blank">Tennessee: CoachT.com</a></li>
            <li class="my-2"><a href="http://www.5atexasfootball.com/" target="_blank">Texas: 5ATexasFootball.com</a></li>
            <li class="my-2"><a href="http://texashsfootball.com/" target="_blank">Texas: TexasHSFootball.com</a></li>
            <li class="my-2"><a href="http://www.wissports.net/sports/football/" target="_blank">Wisconsin: Wisconsin Football Network</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection