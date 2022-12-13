<?php
include('../php/db_login.php');




session_start();
   
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $username = mysqli_real_escape_string($db,$_POST['username']);
   $password = mysqli_real_escape_string($db,$_POST['password']); 
   
   $validate = "SELECT * FROM information WHERE username = '$username' and passcode = '$password'";
   $login = mysqli_query($connection, $validate);
   $row = mysqli_fetch_array($connection, MYSQLI_ASSOC);
   $active = $row['active'];
   
   $count = mysqli_num_rows($connection);
   
   // If result matched $username and $password, table row must be 1 row
     
   if($count == 1) {
      session_register("username");
      $_SESSION['login_user'] = $username;
      
      header("location: www/homepage.php");
   }else {
      $error = "Your Login Name or Password is invalid";
   }
}





?>