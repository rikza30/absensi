<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  @include('template.head')
  <link href="style.css" rel="stylesheet" type="text/css">
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
    @if (auth()->user()->level == "admin")
    <div class="content-header">
      <div class="container-fluid">
        <div class="card card-info card-outline">
          <div class="card-header"><h1>Notifikasi</h1></div>
          <div class="card-body">
            <div class="col-sm-12">
              <div class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                <i class="start-icon far fa-check-circle faa-tada animated"></i>
                <strong class="font__weight-semibold">Rikza</strong> Telah Melakukan Presensi.
              </div>
            </div>
            <div class="col-sm-12">
              <div class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                <i class="start-icon far fa-check-circle faa-tada animated"></i>
                <strong class="font__weight-semibold">Hafizh</strong> Telah Melakukan Presensi.
              </div>
            </div>
            <div class="col-sm-12">
              <div class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                <i class="start-icon far fa-check-circle faa-tada animated"></i>
                <strong class="font__weight-semibold">Haris</strong> Telah Melakukan Presensi.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   

    <div class="content-header">
      <div class="container-fluid">
        <div class="card card-info card-outline">
          <div class="card-header"><h1></h1></div>
          <div class="card-body">
            <form action="{{route('simpanpesan')}}" method="POST">
            @csrf
              <div class="mb-3">
                <label for="pesanadm" class="form-label">Kirim Pesan</label>
                <input type="text" class="form-control" name="pesan" aria-describedby="emailHelp">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  

    @elseif (auth()->user()->level == "user")

    <div class="content-header">
      <div class="container-fluid">
        <div class="card card-info card-outline">
          <div class="card-header"><h1>Notifikasi</h1></div>
          <div class="card-body">
            <div class="col-sm-12">
              <div class="alert fade alert-simple alert-success alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show">
                <i class="start-icon far fa-check-circle faa-tada animated"></i>
                @foreach ($pesan as $item)
                {{ $item->pesan }}
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    @endif

  <aside class="control-sidebar control-sidebar-dark">
  </aside>

  @include('template.footer')
</div>


  @include('template.script')

</body>
</html>
