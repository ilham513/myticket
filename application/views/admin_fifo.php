<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Algoritma Fifo</title>
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
			<td class="title">
			<h2>Algoritma Fifo</h2>
			</td>
			<td class="button-container" style="text-align: right;"></td>
		</tr>
		</table>
		<table id="productTable">
		<thead>
			<tr>
			<th>ID Ticket</th>
			<th>Pesanan</th>
			<th>Waktu Kedatangan</th>
			<th>Burst Time</th>
			</tr>
		</thead>
		<tbody> 
			<?php foreach($array_ticket as $ticket): ?> 
			<?php
			//selisih waktu arrival time
			$waktu_daftar = strtotime("08:00:00");
			$waktu_awal = strtotime($ticket->stamp_waktu);
			$waktu_akhir = strtotime($ticket->waktu_keluar);
			// Menghitung selisih waktu dalam detik
			$waktu_kedatangan = abs($waktu_awal - $waktu_daftar)/60;
			$burst_time = abs($waktu_akhir - $waktu_awal)/60;
			#echo "X: " . $burst_time;die();
			$processes[] = array($ticket->nama_pelanggan,ceil($waktu_kedatangan),ceil($burst_time)) ;
			?>
			<tr>
			<td> <?=$ticket->id_ticket?> </td>
			<td> <?=$ticket->nama_pelanggan?> </td>
			<td> <?=ceil($waktu_kedatangan)?></td>
			<td> <?=ceil($burst_time)?> </td>
			</tr> 
			<?php endforeach; ?>
			<!-- Add more rows as needed -->
		</tbody>
		</table>

		<div class="alert alert-info" role="alert">
			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			<span class="sr-only">Notice:</span>
			Jadi urutan pesanan adalah : <?php foreach($array_ticket as $ticket): echo $ticket->nama_pelanggan.', '; endforeach;?> 
		</div>		
	</div>


	<div class="status-info">
		<table>
		<tr>
			<td class="title">
			<h2>Average Turnaround Time</h2>
			</td>
			<td class="button-container" style="text-align: right;"></td>
		</tr>
		</table>

<?php
// // Definisikan proses-proses beserta waktu kedatangan dan burst time
// $processes = array(
//     array("P1", 0, 4),
//     array("P2", 1, 3),
//     array("P3", 2, 1),
//     array("P4", 3, 2)
// );

// var_dump($stack_data);die();

// Inisialisasi variabel untuk menyimpan waktu putar total
$total_turnaround_time = 0;

// Inisialisasi variabel untuk menyimpan waktu selesai proses sebelumnya
$previous_completion_time = 0;

// Iterasi melalui setiap proses untuk menghitung waktu putar
foreach ($processes as $process) {
    // Ambil detail proses
    $process_id = $process[0];
    $arrival_time = $process[1];
    $burst_time = $process[2];

    // Hitung waktu selesai proses
    $completion_time = max($previous_completion_time, $arrival_time) + $burst_time;

    // Hitung waktu putar (turnaround time)
    $turnaround_time = $completion_time - $arrival_time;

    // Tambahkan waktu putar proses saat ini ke total waktu putar
    $total_turnaround_time += $turnaround_time;

    // Simpan waktu selesai proses untuk digunakan pada iterasi selanjutnya
    $previous_completion_time = $completion_time;

    // Tampilkan hasil untuk proses saat ini
    echo "Turnaround time for Process $process_id: $turnaround_time<br/>";
}

// Hitung waktu rata-rata putar (average turnaround time)
$average_turnaround_time = $total_turnaround_time / count($processes);
// echo "<hr/>Average Turnaround Time: $average_turnaround_time";
?>
	<div class="alert alert-warning" role="alert">
		<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		<span class="sr-only">Notice:</span>
		Jadi rata-rata waktu tunggu adalah : <?=$average_turnaround_time?> 
	</div>		
	
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
