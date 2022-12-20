<?php
include('./db_login.php');

$first_name =  $_POST['firstname'];
$last_name = $_POST['lastname'];
$userName =  $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirmPass = $_POST['Cpassword'];

$insert = "INSERT INTO user_account (firstname, lastname, username, email, phone, password, confim_password) 
        VALUES ('$first_name', '$last_name', '$userName', '$email', '$phone', '$password', '$confirmPass')";
$register = mysqli_query($connection, $insert);

if ($register) {
    header("Location: ../../www/homepage.php", true, 301);
    exit();
}
