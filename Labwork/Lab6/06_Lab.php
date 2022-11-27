<?php
  $Host_IP="localhost";
  $username="MJ";
  $password="1234";
  $database="Lab_db";


  $con = mysqli_connect($Host_IP, $username, $password, $database);

 if ($con) {
    echo "Connection Successful";
 } else {
    echo "Connection Failed";
 }
 




$query = mysqli_query($con, "INSERT INTO 06_lab (F_name, L_name, S_id, Major) VALUES('Alaa', 'ez', 202011068, 'SWE')");

echo "<br>";
if($query){
    echo "Data inserted";
}else{
    echo "Data inserted are not valid";
}

?>