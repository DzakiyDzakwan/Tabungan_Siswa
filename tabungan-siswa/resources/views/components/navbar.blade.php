<!-- Navbar -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="home"><img src="{{ asset('images/logo.png') }}" class="mr-2" alt="logo"/>KuTabung</a>
    <a class="navbar-brand brand-logo-mini" href="home"><img src="{{ asset('images/logo.png') }}" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <i class="mdi mdi-menu menu-icon"></i>
    </button>

    

    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown d-flex align-items-center">
        {{-- <h4 class="my-0 mx-2"><strong> {{auth()->user()->$nama}} </strong></h4> --}}
        <h4 class="my-0 mx-2"><strong> Mantav </strong></h4>
        <a class="nav-link dropdown-toggle " href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="{{ asset('images/profile.png') }}" alt="profile"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a href="settingUser" class="dropdown-item">
            <i class="mdi mdi-account menu-icon"></i>
            Settings
          </a>
          <a class="dropdown-item">
            <form action="/logout" method="POST">
              @csrf
              <i class="mdi mdi-logout menu-icon"></i>
              <button class="btn p-0" type="submit">Logout</button>
            </form>
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>