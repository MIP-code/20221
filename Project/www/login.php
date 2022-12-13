<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <?php 
  include('index.php');
  ?>
  <link rel="stylesheet" href="../src/css/login.css">
</head>

<body>
  <div class="login-box">
    <h2>Login</h2>
    <form action="index.php" method="post">

      <div class="user-box">
        <input type="text" name="" required="">
        <label>Username</label>
      </div>

      <div class="user-box">
        <input type="password" name="" required="">
        <label> Password</label>
      </div>

      <div>
        <a href="register.php" class="register">Register</a>
      </div>

      <a class="btn__submit" href="homepage.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <input type="submit" value=" "> Submit </input>

      </a>
    </form>
  </div>


</body>

</html>