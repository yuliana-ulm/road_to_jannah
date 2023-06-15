<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('Gambar/laravel.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Laravel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('Gambar/human.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">

          <a href="#" class="d-block">{{ Auth::user()->name }}</a>

        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('beranda.index') }}" class="nav-link">
                    <p>Home</p>
                  </a>
              </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('data-artikel') }}" class="nav-link">
                  <p>Artikel Islam</p>
                </a>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('data-pengajian') }}" class="nav-link">
                  <p>Data Pengajian</p>
                </a>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('data-user') }}" class="nav-link">
                    <p>Data User</p>
                  </a>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('login.logout') }}" class="nav-link">
                    <p>Log out</p>
                  </a>
              </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
