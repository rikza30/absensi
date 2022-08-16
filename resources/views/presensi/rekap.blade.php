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

    .styled-table{
      border-collapse: collapse;
      margin: 25px 0;
      font-size: 0.9em;
      font-family: sans-serif;
      min-width: 400px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .styled-table thead tr {
      background-color: #3f6791;
      
      text-align: left;
    }

    .styled-table th,
    .styled-table td {
    padding: 12px 15px;
    }

    .styled-table tbody tr {
      border-bottom: 1px solid #3f6791;
    }


    .styled-table tbody tr:last-of-type{
      border-bottom: 2px solid #3f6791;
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
                Laporan Presensi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/presensi/rekap" class="nav-link active">
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
                                <label for="label">Tanggal</label>
                                <input type="date" name="tglawal" id="tglawal" class="form-control" />
                            </div>
                            <div class="form-group">
                                <a href="" onclick="this.href='/lihat-data/'+ document.getElementById('tglawal').value" class="btn btn-primary col-md-12"><center>
                                    Lihat <i class="fas fa-print"></center></i>
                                </a>
                            </div>
                            <div class="form-group">
                              <table class="styled-table">
                                <thead>
                                  <tr>
                                      <th><center>Karyawan</center></th>
                                      <th><center>Tanggal</center></th>
                                      <th><center>Masuk</center></th>
                                      <th><center>Keluar</center></th>
                                      <th><center>Jumlah Jam Kerja</center></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @forelse($presensi as $pres)
                                  
                                  <tr>
                                      <td><center>{{ $pres->name }}</center></td>
                                      <td><center>{{ $pres->tgl }}</center></td>
                                      <td><center>{{ $pres->jammasuk }}</center></td>
                                      <td><center>{{ $pres->jamkeluar }}</center></td>
                                      <td><center>{{ $pres->jamkerja }}</center></td>
                                  </tr>
                                  @empty
                                      <div class="alert alert-danger"><center>
                                        Belum Ada Data Presensi
                                      </center></div>
                                  @endforelse  
                                </tbody>
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
