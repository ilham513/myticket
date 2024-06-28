<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pilih Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6 text-center">
      <h2>Pilih Login</h2>
      <a href="<?=site_url('login/login_admin')?>"><button type="button" class="btn btn-primary me-2">Login Admin</button></a>
      <a href="<?=site_url('login/login_user')?>"><button type="button" class="btn btn-secondary">Login Pasien</button></a>
    </div>
  </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
