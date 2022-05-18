<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <div class="sidebar-wrapper pt-5">
    <div class="information-menu">
      <h4 class="pl-2 py-1 bg-primary text-white"><strong><i>INFORMATION</i></strong></h4>
      <ul class="nav mt-0">
        <li class="nav-item{{ $activePage == 'home' ? ' active' : '' }}">
          <a class="nav-link text-primary" href="{{ route('home') }}">
            <p><strong>{{ __('HOME') }}</strong></p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'contact_us' ? ' active' : '' }}">
          <a class="nav-link text-primary" href="{{ route('contact') }}">
            <p><strong>{{ __('CONTACT US') }}</strong></p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'about_us' ? ' active' : '' }}">
          <a class="nav-link text-primary" href="{{ route('aboutus') }}">
            <p><strong>{{ __('ABOUT US') }}</strong></p>
          </a>
        </li>
      </ul>
    </div>
    <div class="links mt-2">
      <h4 class="pl-2 py-1 bg-primary text-white"><strong><i>LINKS</i></strong></h4>
      <ul class="nav mt-0">
        <li class="nav-item">
          <a class="nav-link text-primary" href="https://jimstefani.blogspot.com/" target="_blank">
            <p><strong>{{ __('A STEP AHEAD BLOG') }}</strong></p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'links' ? ' active' : '' }}">
          <a class="nav-link text-primary" href="{{ route('links') }}">
            <p><strong>{{ __('EXTERNAL LINKS') }}</strong></p>
          </a>
        </li>
  
      </ul>
    </div>
  </div>
</div>