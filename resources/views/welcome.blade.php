<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <title>GS</title>
  </head>
  <body>
    
    <div class="global-container">
      <div class="card absen-form">
        <div class="card-body">
          <h1 class="card-title text-center">A B S E N S I</h1>
        </div>
        <div class="card-text">
          <div class="mb-1"><strong>Tanggal</strong></div>
                            <div class="form-group mb-2">
                            <input type="date" class="form-control" id="Tanggal" name="Tanggal">
                            </div>
          <div class="mb-3">
            <label for="name" class="form-label"><strong>Nama</strong></label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="mb-3">
            <label for="sklh" class="form-label"><strong>Asal Sekolah</strong></label>
            <input type="text" class="form-control" id="sklh">
          </div>
        </div>
        <div>
          <div class="mb-1"><strong>Waktu</strong></div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="pagi" checked>
              <label class="form-check-label" for="flexRadioDefault1">Pagi</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="sore">
              <label class="form-check-label" for="flexRadioDefault2">Sore</label>
            </div>
        </div>
        <div class="mb-3">
          <label for="ket" class="form-label"><strong>Keterangan</strong></label>
          <input type="text" class="form-control" id="ket">
        </div>
        <button type="button" class="btn btn-primary">Kirim</button>
      </div>
    </div>
  </body>
</html>