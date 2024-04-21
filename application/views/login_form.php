<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
  body {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    background-color: #f5f5f5;
  }
  .login-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
  }
  .login-container img {
    width: 150px;
    border-radius: 50%;
    margin-bottom: 20px;
  }
  .login-container h2 {
    margin-bottom: 20px;
    color: #333;
  }
  .login-container input[type="text"],
  .login-container input[type="password"] {
    width: 250px;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  .login-container input[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
  }
  .login-container input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>

<div class="login-container">
  <img src="<?=base_url().'/img/logo.jpg'?>" alt="Avatar">
  <h2>Login</h2>
  <form action="<?=site_url('login/login_go')?>" method="post">
    <input type="text" name="id" placeholder="ID" required>
    <br>
    <input type="password" name="password" placeholder="Password" required>
    <br>
    <input type="submit" value="Login">
  </form>
</div>

</body>
</html>