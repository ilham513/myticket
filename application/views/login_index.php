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
      <form action="<?=site_url('login/tambah_ticket_go')?>" method="post">
        <div class="mb-3">
        <label for="pesan" class="form-label">Nama Pelanggan:</label>
          <select name="id_pelanggan" class="form-select" aria-label="Default select example">
          <?php foreach($array_pelanggan as $pelanggan): ?>
            <option value="<?=$pelanggan->id_pelanggan?>"><?=$pelanggan->nama_pelanggan?></option>
          <?php endforeach; ?>
          </select>
          <!--div id="emailHelp" class="form-text">Untuk pelanggan yang belum terdaftar. Silahkan daftar <a href="/login/daftar_pelanggan">di sini</a>.</div-->
        </div>
        <div class="mb-3">
          <label for="pesan" class="form-label">Tanggal Masuk:</label>
          <input class="form-select" type="date" name="tanggal_masuk"/>
        </div>
        <div class="mb-3">
          <label for="pesan" class="form-label">Waktu Masuk:</label>
          <input class="form-select" type="time" name="waktu_masuk"/>
        </div>
        <div class="mb-3">
          <label for="pesan" class="form-label">Waktu Keluar:</label>
          <input class="form-select" type="time" name="waktu_keluar"/>
        </div>
        <div class="mb-3">
          <label for="pesan" class="form-label">Poli Tujuan:</label>
          <select name="id_poli" class="form-select" aria-label="Default select example">
          <?php foreach($array_poli as $poli): ?>
            <option value="<?=$poli->id_poli?>"><?=$poli->nama_poli?></option>
          <?php endforeach; ?>
          </select>
        </div>
        <div class="mb-3">
          <label for="pesan" class="form-label">Nama Dokter:</label>
          <select name="id_dokter" class="form-select" aria-label="Default select example">
          <?php foreach($array_dokter as $dokter): ?>
            <option value="<?=$dokter->id_dokter?>"><?=$dokter->nama_dokter?></option>
          <?php endforeach; ?>
          </select>
        </div>
        <button type="submit" class="btn btn-success btn-block">Kirim</button>
      </form>
    </div>


    <div class="col-md-6">
      <img src="<?=base_url('img/health.jpg')?>" class="img-fluid" alt="...">
    </div>



  </div>



</div>
</body>
</html>
