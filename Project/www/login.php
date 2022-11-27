<?php

//  include('../config/config.php');



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../src/css/login.css">
</head>
<body>

<!-- nav bar start-->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Register/Login</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>-->
      </ul>
    </div>
  </div>
</nav>
<!-- nav bar end-->
  <div class="login-box">
    <h2>Login</h2>
    <form action="" method="post">

    <div class="user-box">
      <input type="text" name="" required="">
      <label>Username</label>
    </div>

    <div class="user-box">
    <input type="password" name="" required="">
    <label> Password</label>
    </div>

    <div>
      <a href="#" class="register">Register</a>
    </div>

    <a class="btn__submit" href="#">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  Submit
  
  </a>
    </form>
  </div>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>