@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'stats', 'title' => __('Recruiting Brain - Rosters and Statistics')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row mb-3">
        <div class="col-md-8">
            <h2 class="text-primary"><strong>Rosters and Statistics</strong></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <ul class="list-unstyled text-primary">
            <li class="my-2"><a href="http://www.maxpreps.com/" target="_blank">MaxPreps </a></li>
            <li class="my-2"><a href="http://www.hsgametime.com/" target="_blank">HS GameTime </a></li>
            <li class="my-2"><a href="http://stats.rockypreps.com/football/boys/leaderboard/individual/" target="_blank">Colorado: Rocky Mountain News </a></li>
            <li class="my-2"><a href="http://sportstrac.herald.com/Sportstrac.aspx" target="_blank">Florida: Miami Herald</a></li>
            <li class="my-2"><a href="http://www.heraldtribune.com/apps/pbcs.dll/section?CATEGORY=SPORTS15" target="_blank">Florida: Sarasota Herald Tribune</a></li>
            <li class="my-2"><a href="https://www.ajc.com/highschool/content/sports/highschool/index.html" target="_blank">Georgia: Atlanta Journal-Constitution</a></li>
            <li class="my-2"><a href="http://www.newsok.com/cgi-bin/footballstats/highschoolstats" target="_blank">Oklahoma: Daily Oklahoman</a></li>
            <li class="my-2"><a href="http://www.chron.com/sports/highschoolsports/results.html?site=default&tpl=Leaders&SearchType=Leaders&Sport=1&TeamID=&DistrictID=-1&SearchDate=11%2F30%2F07&SearchDateEnd=11%2F30%2F07" target="_blank">Texas: Houston Chronicle</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection