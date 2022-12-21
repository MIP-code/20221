<?php
include('./db_login.php');


if (isset($_POST['name'])){
    $trainer = $_POST['name'];
    $plan = $_POST['plan'];

    $query = "INSERT INTO `class` (`trainer_name`, `plan_duration`) VALUES ('$trainer', '$plan')";
    $test = "SELECT `number_of_trainees` FROM `g` WHERE `trainer_name` = $trainer AND `plan` = $plan";

    mysqli_query($connection, $query);
    header("Refresh: 3; url= ../../www/homepage.php", true, 301);
    echo "You have successfully registered with $trainer for $plan months";
}
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
