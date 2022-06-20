<div class="sidebar" data-color="primary" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="sidebar-wrapper">
    <ul class="nav mt-5">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="material-icons">laptop</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>

      {{-- <li class="nav-item @if (strpos($activePage, 'customer') !== false) echo ' active'; @endif">
        <a class="nav-link" data-toggle="collapse" href="#navbar-customers" aria-expanded="{{ strpos($activePage, 'customers') !== false ? 'true' : 'false' }}">
          <i class="material-icons">groups</i>
          <p>{{ __('Customers') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ strpos($activePage, 'customers') !== false ? 'show' : '' }}" id="navbar-customers">
          <ul class="nav">
						<li class="nav-item{{ $activePage == 'customers.create' ? ' active' : '' }}">
							<a class="nav-link" href="{{ route('customers.create') }}">
								<i class="material-icons">add</i>
								<span class="sidebar-normal"> {{ __('New Customer') }} </span>
							</a>
						</li>
            <li class="nav-item{{ $activePage == 'customers' ? ' active' : '' }}">
							<a class="nav-link" href="{{ route('customers.index') }}">
								<span class="sidebar-mini"> C </span>
								<span class="sidebar-normal"> {{ __('Customer Index') }} </span>
							</a>
						</li>
          </ul>
        </div>
      </li> --}}

      <li class="nav-item{{ $activePage == 'athletes' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('athletes.index') }}">
          <i class="material-icons">sports_football</i>
          <p>{{ __('Athletes') }}</p>
        </a>
      </li>

      <li class="nav-item {{ str_contains($activePage, 'visitors') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#visitor_management" aria-expanded="true">
          <i class="material-icons">workspace_premium</i>
          <p>{{ __('Visitor Management') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="visitor_management">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'visitors.approved' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('approved_customers') }}">
                <i class="material-icons">how_to_reg</i>
                <span class="sidebar-normal">{{ __('Approved') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'visitors.pending' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('pending_customers') }}">
                <i class="material-icons">pending</i>
                <span class="sidebar-normal">{{ __('Pending Approval') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'visitors.denied' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('denied_customers') }}">
                <i class="material-icons">block</i>
                <span class="sidebar-normal">{{ __('Access Denied') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ str_contains($activePage, 'contact') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#contact_management" aria-expanded="true">
          <i class="material-icons">contact_support</i>
          <p>{{ __('Contact') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="contact_management">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'contact.messages' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('contactlist') }}">
                <i class="material-icons">comment</i>
                <span class="sidebar-normal">{{ __('Messages') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'contact.config' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('contact.config') }}">
                <i class="material-icons">settings</i>
                <span class="sidebar-normal">{{ __('Configuration') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
          <i class="material-icons">group</i>
          <p>{{ __('User Management') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('profile.edit') }}">
          <i class="material-icons">account_box</i>
          <p>{{ __('Profile') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>