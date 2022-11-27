<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <?php
  include('index.php');
  ?>
  <link rel="stylesheet" href="../src/css/login.css">
  
</head>

<body>
  <div class="login-box">
    <h2>Register</h2>
    <form action="index.php" method="post">

      <div class="user-box">
        <input type="text" name="" required="">
        <label>First Name</label>
      </div>

      <div class="user-box">
        <input type="text" name="" required="">
        <label>Last Name</label>
      </div>


      <div class="user-box">
        <input type="text" name="" required="">
        <label>Email</label>
      </div>

      <div class="user-box">
        <input type="text" name="" required="">
        <label>Phone</label>
      </div>

      <div class="user-box">
        <input type="text" name="" required="">
        <label>Username</label>
      </div>

      <div class="user-box">
        <input type="password" name="" required="">
        <label> Password</label>
      </div>


      <div class="user-box">
        <input type="password" name="" required="">
        <label>Confirm your password</label>
      </div>

      <div>
        <a href="login.php" class="register">Already have an account?</a>
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


</body>

</html>