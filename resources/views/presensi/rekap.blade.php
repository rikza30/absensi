<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  @include('template.head')
  <script src="{{asset('Js/jam.js')}}"></script>
  <style>
    #watch {
        color: rgb(red, green, blue);
        position: absolute;
        z-index: 1;
        height: 40px;
        width: 700px;
        overflow: show;
        margin: auto;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        font-size: 10vw
        -webkit-text-stroke: 3px rgb(210, 65, 36);
        text-shadow: 4px 4px 10px rgba(210, 65, 36, 0.4),
            4px 4px 20px rgba(210, 45, 26, 0.4),
            4px 4px 30px rgba(210, 25, 16, 0.4),
            4px 4px 40px rgba(210, 15, 06, 0.4);  
    }
  </style>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" onload="realtimeClock()">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('asset/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  @include('template.navbar')

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('asset/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
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

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <p>
                Presensi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/masuk" class="nav-link ">
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
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <p>
                Laporan Presensi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lihat Data </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>    
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan Presensi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan Presensi</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content">
        <div class="row justify-content-center">
            <div class="content">
                <div class="row justify-content-center">
                    <div class="card card-info card-outline">
                        <div class="card-header">Lihat Data</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="label">Tanggal Awal</label>
                                <input type="date" name="tglawal" id="tglawal" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="label">Tanggal Akhir</label>
                                <input type="date" name="tglakhir" id="tglakhir" class="form-control" />
                            </div>
                            <div class="form-group">
                                <a href="" onclick="this.href='/filter-data/'+ document.getElementById('tglawal').value +
                            '/' + document.getElementById('tglakhir').value " class="btn btn-primary col-md-12">
                                    Lihat <i class="fas fa-print"></i>
                                </a>
                            </div>
                            <div class="form-group">
                                <table border="1">
                                    <tr>
                                        <th><center>Pegawai</center></th>
                                        <th><center>Tanggal</center></th>
                                        <th><center>Masuk</center></th>
                                        <th><center>Keluar</center></th>
                                        <th><center>Jumlah Jam Kerja</center></th>
                                    </tr>
                                    
                                    <tr>
                                        <td><center>Rikza</center></td>
                                        <td><center>20/07/2022</center></td>
                                        <td><center>09:42:50</center></td>
                                        <td><center>14:20:50</center></td>
                                        <td><center>5</center></td>
                                    </tr>
                                </table>
                            </div>
                        </div><!-- /.container-fluid -->
                    </div>
                </div>
            </div>
        </div>
    </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>

  @include('template.footer')
</div>


  @include('template.script')

</body>
</html>
