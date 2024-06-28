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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?=base_url()?>css/style.css">
</head>
<body>

<?php $this->load->view('component/sidebar');?>

<div class="content">
  
	<div class="status-info">
	<h3>Data Aplikasi</h3>
	<div class="row">
      <div class="col-lg-3">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-ticket fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading"><?=$jumlah_ticket?></p>
                <p class="announcement-text">Antrian</p>
              </div>
            </div>
          </div>
          <a href="<?=site_url('admin/ticket')?>">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Lihat
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="panel panel-warning">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-user-md fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading"><?=$jumlah_dokter?></p>
                <p class="announcement-text"> Dokter</p>
              </div>
            </div>
          </div>
          <a href="<?=site_url('admin/dokter')?>">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Lihat
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="panel panel-danger">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-users fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading"><?=$jumlah_pelanggan?></p>
                <p class="announcement-text">Pasien</p>
              </div>
            </div>
          </div>
          <a href="<?=site_url('admin/pelanggan')?>">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Lihat
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="panel panel-success">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-plus fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading"><?=$jumlah_poli?></p>
                <p class="announcement-text"> Poli</p>
              </div>
            </div>
          </div>
          <a href="<?=site_url('admin/poli')?>">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <div class="col-xs-6">
                  Lihat
                </div>
                <div class="col-xs-6 text-right">
                  <i class="fa fa-arrow-circle-right"></i>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div><!-- /.row -->
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
