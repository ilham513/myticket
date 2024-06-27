<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyTicket</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Tema warna hijau -->
  <style>
    /* Mengubah warna tema menjadi hijau */
    .form-control {
      border-color: #5cb85c;
    }
    .form-control:focus {
      border-color: #4cae4c;
      box-shadow: 0 0 0 0.25rem rgba(76, 174, 76, 0.25);
    }
    
    body {
    background-color: #e8ffed;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Klinik Dr. Teguh B.S</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?=site_url('login/login')?>">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <div class="row bg-gray p-5">

  
    <div class="col-md-6">
      <h2 class="text-center">Daftar Antri Klinik</h2>
      <div class="d-grid gap-2 mt-5">
        <a class="btn btn-primary" href="<?=site_url()?>/login/daftar_pasien_lama">Pasien lama</a>
        <a class="btn btn-primary" href="<?=site_url()?>/login/daftar_pasien_baru">Pasien baru</a>
      </div>
    </div>


    <div class="col-md-6">
      <img src="<?=base_url('img/health.jpg')?>" class="img-fluid" alt="...">
    </div>



  </div>



</div>
</body>
</html>
