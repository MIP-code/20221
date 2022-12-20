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
    <form action="../src/php/register_action.php" method="post">

      <div class="user-box">
        <input type="text" required id="firstname" name="firstname">
        <label>First Name</label>
      </div>

      <div class="user-box">
        <input type="text" required id="lastname" name="lastname">
        <label>Last Name</label>
      </div>

      <div class="user-box">
        <input type="text" required id="email" name="email">
        <label>Email</label>
      </div>

      <div class="user-box">
        <input type="text" required id="phone" name="phone">
        <label>Phone</label>
      </div>

      <div class="user-box">
        <input type="text" required id="username" name="username">
        <label>Username</label>
      </div>

      <div class="user-box">
        <input type="password" required id="password" name="password">
        <label>Password</label>
      </div>


      <div class="user-box">
        <input type="password" required id="Cpassword" name="Cpassword">
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
        <input type="submit" value="Register"> </input>

      </a>
    </form>
  </div>


</body>

</html>