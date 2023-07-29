<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title><?= $title; ?></title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <style>
    .container {
      border-radius: 15px;
      border: none;
      background-color: rgb(27, 45, 80);
    }
  
    /* Gaya kustom untuk mengatur kontainer di tengah-tengah layar */
    html, body {
      height: 90%;
    }
  
    body {
      display: flex;
      align-items: center;
      justify-content: center;
    }

  </style>
  <body class="p-5 m-5 bg-body-secondary">

 
    <div class="container text-center ">
      <div class="row align-items-center   ">
        <div class="col ">
          <div class="card shadow-lg">
            <div class="card-body">
              <h5 class="card-title fw-bolder border-bottom ">SI-SURAT</h5>
              <p class="card-text">Sistem Informasi Pengarsipan Surat dan Pembuatan  Surat</p><br>
              <a href="<?= base_url('home') ?>" class="btn btn-primary shadow-lg">Kunjungi</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card ">
            <div class="card-body shadow-lg">
              <h5 class="card-title fw-bolder border-bottom">SI-INVENTORI</h5>
              <p class="card-text">Sistem Informasi Inventori Barang Masuk dan Keluar, serta Dokumentasi Laporannya </p>
              <a href="#" class="btn btn-primary shadow-lg">Kunjungi</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </body>
</html>