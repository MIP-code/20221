<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Database</title>
</head>
<body>
    <?php
    $Host_IP="localhost";
    $username="Mojab";
    $password="1234";
    $database="mojabBB";
    
    $con = mysqli_connect($Host_IP, $username, $password, $database);


    if(!$con){

        echo"debugging errno: ". mysqli_connect_errno();
        echo"<br>";
        echo" debugging error: ". mysqli_connect_error();
        exit;
    }
    
    echo "Connection is successful";
    
  
    $x = mysqli_query($con, "INSERT INTO first (user_name, phone, email) VALUES ('belal',0543678910 ,'belal')");
    
    if(!$con){

        echo"debugging errno: ". mysqli_connect_errno();
        echo"<br>";
        echo" debugging error: ". mysqli_connect_error();
        exit;
    }
    
    
    
    ?>
</body>
</html>