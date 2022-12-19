<?php
  $Host_IP="localhost";
  $username="MJ";
  $password="1234";
  $database="gym";


  $con = mysqli_connect($Host_IP, $username, $password, $database);

 if ($con) {
    echo "Connection Successful";
 } else {
    echo "Connection Failed";
 }
 



 

$query = mysqli_query($con, "INSERT INTO user_account (user_name, email, password) VALUES('Mojab', 'jamal@gmail', '1234')");

echo "<br>";
if($query){
    echo "Data inserted";
}else{
    echo "Data inserted are not valid";
}

?>