
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome </title>
    <?php

      include('index.php');
      include('../src/php/db_login.php');
      
      $username = $_POST['username'];
      $password = $_POST['password']; 

    session_start();
         if (isset($_SESSION['username'])){
            echo "<h1>Welcome, ".$_POST['username']."</h1>";
            echo "<a href='booking.php'>Book now</a><br>";
            echo "<br><a href='../src/php/logout.php'><input type=button value=logout name=logout></a>";

      }else{
         if($_SESSION['username']==$username && $_SESSION['password']==$password){
         $_SESSION['username'] = $username;
         echo "<script>location.href='welcome.php'</script>";
      }else{
         echo "<script>alert('Username or Password is wrong')</script>";
         echo "<script>location.href='login.php'</script>";

      }

      }
   


    
    ?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
      
      








      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>