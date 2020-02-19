<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="{{ url('/admin') }}">Easy Donate</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="{{ url('dsh/images/dashboard-logo.png') }}"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Admin
            <strong>Dashboard</strong>
          </span>
        </div>
      </div>
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li>
            <a href="{{ url('/admin') }}">
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="{{ url('galleries') }}">
              <span>Gallery</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
  </nav>

</div>
<!-- page-wrapper -->
