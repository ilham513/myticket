<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Ticket Edit</title>
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
      <td class="title"><h2>Edit Antri</h2></td>
    </tr>
  </table>
      <form action="<?=site_url('/admin/ticket_edit_go')?>" method="post">
        <div class="form-group">
          <input name="id_ticket" type="hidden" class="form-control" value="<?=$obj_ticket->id_ticket?>">
        </div>
        <div class="form-group">
          <label for="nama">Nama Pelanggan:</label>
          <select name="id_pelanggan" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <?php foreach($array_pelanggan as $pelanggan): ?>
            <option <?=$pelanggan->id_pelanggan == $obj_ticket->id_pelanggan ? 'selected' : '';?> value="<?=$pelanggan->id_pelanggan?>"><?=$pelanggan->nama_pelanggan?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="nama">Poli Tujuan:</label>
          <select name="id_poli" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <?php foreach($array_poli as $poli): ?>
            <option <?=$poli->nama_poli == $obj_ticket->nama_poli ? 'selected' : '';?> value="<?=$poli->id_poli?>"><?=$poli->nama_poli?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="nama">Tanggal Masuk:</label>
          <input name="tanggal_masuk" type="date" class="form-control" id="nama" value="<?=$obj_ticket->tanggal_masuk?>">
        </div>
        <div class="form-group">
          <label for="nama">Waktu Masuk:</label>
          <input name="waktu_masuk" type="time" class="form-control" id="nama" value="<?=$obj_ticket->waktu_masuk?>">
        </div>
        <div class="form-group">
          <label for="nama">Waktu Keluar:</label>
          <input name="waktu_keluar" type="time" class="form-control" id="nama" value="<?=$obj_ticket->waktu_keluar?>">
        </div>
        <div class="form-group">
          <label for="nama">Nama Dokter:</label>
          <select name="id_dokter" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <?php foreach($array_dokter as $dokter): ?>
            <option <?=$dokter->id_dokter == $obj_ticket->id_dokter ? 'selected' : '';?> value="<?=$dokter->id_dokter?>"><?=$dokter->nama_dokter?></option>
            <?php endforeach; ?>
          </select>
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
