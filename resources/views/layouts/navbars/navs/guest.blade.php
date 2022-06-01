<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-fixed fixed-top text-primary bg-primary">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <a href="/" class="h3 text-warning m-0" id="logo"><img src="{{ asset('assets/img/Logo.png') }}" alt="" height="50" class="mr-3"></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        {{-- <li class="nav-item{{ $activePage == 'register' ? ' active' : '' }}">
          <a href="{{ route('register') }}" class="nav-link">
            <i class="material-icons">person_add</i> {{ __('Register') }}
          </a>
        </li> --}}
        <li class="nav-item{{ $activePage == 'login' ? ' active' : '' }}">
          @if (!Auth::guard('customer')->check())
          <a href="{{ route('premium.login') }}" class="nav-link">
            <i class="material-icons">fingerprint</i> {{ __('Login') }}
          </a>
          @else
          <a href="{{ route('premium.logout') }}" class="nav-link">
            <i class="material-icons">fingerprint</i> {{ __('Logout') }}
          </a>
          @endif
          
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->