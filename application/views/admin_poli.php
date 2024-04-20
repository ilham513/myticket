<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Poli</title>
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
      <td class="title"><h2>Data poli</h2></td>
      <td class="button-container" style="text-align: right;">
        <a href="<?=site_url('admin/poli_add')?>"><button type="button" class="btn btn-primary">Tambah Poli Baru</button></a>
      </td>
    </tr>
  </table>
	  <table id="productTable">
		<thead>
		  <tr>
			<th>ID Poli</th>
			<th>Nama Poli</th>
			<th>Action</th>
		  </tr>
		</thead>
		<tbody>
		<?php foreach($array_poli as $poli): ?>
		  <tr>
			<td><?=$poli->id_poli?></td>
			<td><?=$poli->nama_poli?></td>
			<td>
				<a href="<?=site_url('/admin/poli_edit/'.$poli->id_poli)?>">Ubah</a> | 
				<a href="<?=site_url('/admin/poli_hapus/'.$poli->id_poli)?>">Hapus</a>
			</td>
		  </tr><?php endforeach; ?><!-- Add more rows as needed -->
		</tbody>
	  </table>
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
