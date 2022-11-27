<?php

$SERVER="localhost";
$DB_USERNAME="root";
$DB_PASSWORD=" ";
$DB_NAME="gym";




$connection = mysqli_connect($SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if ($connection) {
    echo "Connection Successful";
}
?>