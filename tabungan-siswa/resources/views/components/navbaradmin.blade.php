<!-- Navbar -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo.png" class="mr-2" alt="logo"/>KuTabung</a>
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo.png" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <i class="mdi mdi-menu menu-icon"></i>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      {{-- Setting --}}
      <li class="nav-item nav-profile dropdown">
        <?php 
        use App\Models\Admin;
        $id = Auth::user()->id;
        $name = Admin::where('user', $id)->get()[0]['nama'];
        ?>
        <h5 class="my-0 mx-2"><strong> {{$name}} </strong></h5>
        <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" id="profileDropdown">
          <img src="images/profile.png" alt="profile"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a href="/settingAdmin" class="dropdown-item">
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
      {{-- Notification --}}
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="mdi mdi-bell mx-0 fs-1"></i>
          <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
          <a href="adminConfirmation" class="dropdown-item preview-item text-black text-decoration-none">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="ti-info-alt mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Incoming Balance</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                Need Confirmation !
              </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-warning">
                <i class="ti-settings mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Settings</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                Private message
              </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-info">
                <i class="ti-user mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">New user registration</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                2 days ago
              </p>
            </div>
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>