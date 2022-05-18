@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'links', 'title' => __('Recruiting Brain - Links')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row mb-3">
        <div class="col-md-8">
            <h2 class="text-primary"><strong>Links</strong></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <ul class="list-unstyled text-primary">
            <li class="my-2"><a href="{{ route('fans') }}">Fan Recruiting Sites</a></li>
            <li class="my-2"><a href="{{ route('combines') }}">Combines</a></li>
            <li class="my-2"><a href="{{ route('marketing') }}">Recruit Marketing</a></li>
            <li class="my-2"><a href="{{ route('stats') }}">Rosters and Statistics</a></li>
            <li class="my-2"><a href="{{ route('highschools') }}">High School Sites</a></li>
            <li class="my-2"><a href="{{ route('teams') }}">Team Web Sites</a></li>
            <li class="my-2"><a href="{{ route('coaches') }}">Sites for Coaches</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection