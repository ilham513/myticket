<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Pelanggan Edit</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?=base_url()?>/css/style.css">
<style>
table {
      border-collapse: collapse;
    }
    table, th, td {
      border: none;
    }
</style>
</head>
<body>

<?php $this->load->view('component/sidebar');?>

<div class="content">	  
	<div class="status-info">	
<table>
    <tr>
      <td class="title"><h2>Edit Data Pelanggan</h2></td>
    </tr>
  </table>
      <form action="<?=site_url('/admin/pelanggan_edit_go')?>" method="post">
        <div class="form-group">
          <input name="id_pelanggan" type="hidden" class="form-control" value="<?=$obj_pelanggan->id_pelanggan?>">
        </div>
        <div class="form-group">
          <label for="nama">Nama Pelanggan:</label>
          <input name="nama_pelanggan" type="text" class="form-control" id="nama" value="<?=$obj_pelanggan->nama_pelanggan?>">
        </div>
        <div class="form-group">
          <label for="nama">Tempat Lahir:</label>
          <input name="tempat_lahir" type="text" class="form-control" id="nama" value="<?=$obj_pelanggan->tempat_lahir?>">
        </div>
        <div class="form-group">
          <label for="nama">Tanggal Lahir:</label>
          <input name="tanggal_lahir" type="date" class="form-control" value="<?=$obj_pelanggan->tanggal_lahir?>">
        </div>
        <div class="form-group">
          <label for="nama">Alamat:</label>
          <input name="alamat" type="text" class="form-control" id="nama" value="<?=$obj_pelanggan->alamat?>">
        </div>
        <div class="form-group">
          <label for="nama">Nomor Telpon:</label>
          <input name="no_telp" type="text" class="form-control" id="nama" value="<?=$obj_pelanggan->no_telp?>">
        </div>
        <button type="submit" class="btn btn-success btn-block">Kirim</button>
      </form>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#productTable').DataTable();
  });
</script>

</body>
</html>
