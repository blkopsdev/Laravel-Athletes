<div class="wrapper wrapper-full-page">
  @include('layouts.navbars.navs.guest')
  <div class="main-panel">
    @include('flash_msg')
    @include('layouts.navbars.sidebar')
    @yield('content')
    @include('layouts.footers.guest')
  </div>
</div>