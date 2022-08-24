<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="{{asset('asset/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Griyasoft</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('asset/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->     
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @if (auth()->user()->level == "user")
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <p>
                Presensi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/masuk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Presensi Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/keluar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Presensi Keluar</p>
                </a>
              </li>
            </ul>
          </li>
          @endif

          @if (auth()->user()->level == "admin")
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <p>
                Laporan Presensi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/presensi/rekap" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cetak Data </p>
                </a>
              </li>
            </ul>
          </li>
          @endif
        </ul>
      </nav>    
    </div>
  </aside>