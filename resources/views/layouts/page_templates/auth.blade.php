<div class="wrapper ">
  @include('layouts.navbars.navs.auth')
  <div class="main-panel">
    @include('flash_msg')
    @if (str_contains(url()->current(), 'dashboard'))
      @include('layouts.navbars.sidebar')
    @else
      @include('layouts.navbars.sidebar-frontend')
    @endif
    @yield('content')
    @include('layouts.footers.auth')
  </div>
</div>