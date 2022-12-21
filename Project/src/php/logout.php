<?php

include('./db_login.php');

   session_start();
   
   if(isset($_POST['username'])) {

      session_destroy();

      echo "<script>location.herf='login.php'</script>";
   }else{
      echo "<script>location.herf='login.php'</script>";

   }

   header("Refresh: 3; url= ../../www/homepage.php", true, 301);
   echo "You have successfully logged out, you will be redirected to the main page....";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <style>

      body{
         background: #0c0c0c;
         color: #ffffff;


      }
   </style>
</head>
<body>
   
</body>
</html>