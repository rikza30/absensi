<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  @include('template.head')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('asset/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  @include('template.navbar')

  @include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading"><center>Terima Kasih!</h4>
            <p><center>Presensi Masuk Berhasil</p>
            <hr>
            <p class="mb-0"><center>Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
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