<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  @include('template.head')
  <style>
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
            <form action="{{route('simpannotif')}}" method="PUT">
              @csrf  
              @method('PUT')
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

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        
        
      </div>
      <div class="content">
      <div class="row justify-content-center">
        <div class="content">
          <div class="row justify-content-center">
            <div class="container-fluid">
              <div class="card card-info card-outline">
              <div class="card-header">Lihat Data</div>
              <div class="card-body">
                <div class="form-group">
                  <table class="styled-table">
                    <thead>
                      <tr>
                        <th><center>Pesan</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($pesan as $item)
                      <tr>
                          <td>{{$item->pesan}}</td>
                      </tr>
                      @endforeach  
                    </tbody>
                  </table>
              </div>
            </div>
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
