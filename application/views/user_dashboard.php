<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Dashboard</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?=base_url()?>css/style.css">
</head>
<body>

<?php $this->load->view('component/sidebar_user');?>

<div class="content">
  
	<div class="status-info">
	<h3>Data Pasien <?=$this->session->userdata('user_nik');?></h3>
	  <table id="productTable">
		<thead>
		  <tr>
			<th>ID Antre</th>
			<th>Nama Pasien</th>
			<th>Tanggal Mendaftar</th>
			<th>Jam Masuk</th>
			<th>Jam Keluar</th>
			<th>Poli Tujuan</th>
			<th>Nama Dokter</th>
		  </tr>
		</thead>
		<tbody>
			<?php foreach($array_ticket as $ticket): ?>
		  <tr>
			<td><?=$ticket->id_ticket?></td>
			<td><?=$ticket->nama_pelanggan?></td>
			<td><?=date("d-m-Y", strtotime($ticket->tanggal_masuk))?></td>
			<td><?=date("H:i", strtotime($ticket->waktu_masuk))?></td>
			<td><?=date("H:i", strtotime($ticket->waktu_keluar))?></td>
			<td><?=$ticket->nama_poli?></td>
			<td><?=$ticket->nama_dokter?></td>
		  </tr>
		  <?php endforeach; ?>
		</tbody>
	  </table>


	</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    $('#productTable').DataTable();
  });
</script>

</body>
</html>
