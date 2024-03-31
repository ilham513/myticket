<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
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
      <td class="title"><h2>Judul di Kiri</h2></td>
      <td class="button-container" style="text-align: right;">
        <button type="button" class="btn btn-primary">Tombol di Kanan</button>
      </td>
    </tr>
  </table>
	  <table id="productTable">
		<thead>
		  <tr>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Stock</th>
			<th>Action</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td>1</td>
			<td>Product A</td>
			<td>$20</td>
			<td>50</td>
			<td>Edit | Delete</td>
		  </tr>
		  <tr>
			<td>2</td>
			<td>Product B</td>
			<td>$25</td>
			<td>30</td>
			<td>Edit | Delete</td>
		  </tr>
		  <!-- Add more rows as needed -->
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
