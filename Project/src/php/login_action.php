<?php
include('../php/db_login.php');




if(!$connection){
   echo "Error: ". mysqli_connect_errno();
   echo "<br>";
   echo "Error: ". mysqli_connect_error();
   exit;

}
   

   
   $username = $_POST['username'];
   $password = $_POST['password']; 
   
  
   $query = "SELECT * FROM user_account WHERE user_name ='$username' AND password = '$password'";
   $result = mysqli_query($connection, $query);

   if($result){
      if(mysqli_num_rows($result) > 0){
         session_start();
         $result_rows = mysqli_fetch_row($result);
         $_SESSION['id']=$result_rows[0];
         header("location: ../www/welcome.php");
      }else{
         echo "Wrong Userame or Password!";
      }
   }else{
      echo (mysqli_connect_error($connection));
   }

   mysqli_close($connection);



?>