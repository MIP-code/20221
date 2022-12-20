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
    <form action="welcome.php" method="post">

      <div class="user-box">
        <input type="text" name="username" >
        <label>Username</label>
      </div>

      <div class="user-box">
        <input type="password" name ="password">
        <label> Password</label>
      </div>

      <div>
        <a href="register.php" class="register">Don't have an account? Register</a>
      </div>

      <a class="btn__submit" href="#">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <input type="submit" name="submitBtn" value="Login">  </input>

      </a>
    </form>
  </div>


</body>

</html>