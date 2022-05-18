@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'fans', 'title' => __('Recruiting Brain - Fan Recruiting Sites')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row mb-3">
        <div class="col-md-8">
            <h2 class="text-primary"><strong>Fan Recruiting Sites</strong></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <ul class="list-unstyled text-primary">
            <li class="my-2"><a href="http://www.rivals.com/" target="_blank">Rivals.com</a></li>
            <li class="my-2"><a href="http://www.scout.com/" target="_blank">Scout.com</a></li>
            <li class="my-2"><a href="http://insider.espn.go.com/proxy/Proxy.dll/insider/recruiting/football/index?&action=login&appRedirect=http%3a%2f%2finsider.espn.go.com%2fproxy%2fProxy.dll%2finsider%2frecruiting%2ffootball%2findex" target="_blank">ESPN Football Recruiitng</a></li>
            <li class="my-2"><a href="http://www.cstv.com/sports/m-footbl/recruiting/recruiting.html" target="_blank">CSTV Football Recruiting </a></li>
            <li class="my-2"><a href="http://maxemfingerrecruiting.com/index.php?option=com_frontpage&Itemid=87" target="_blank">Max Emfinger</a></li>
            <li class="my-2"><a href="http://www.goupstate.com/apps/pbcs.dll/section?Category=PSPORTS " target="_blank">Palmetto Sports </a></li>
            <li class="my-2"><a href="http://www.dandydon.com/" target="_blank">Dandy Don's LSU Recruiting News </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection