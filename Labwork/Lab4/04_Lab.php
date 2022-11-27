<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 4</title>
    <link rel="stylesheet" href="../Lab4/style.css">
</head>
<body>
<?php
$classFriends = array("Alaa", "Belal", "Aziz");

echo "<h2>"."Class friends are: "."</h2>"."<p class=p>". $classFriends[0]."<br>".$classFriends[1]."<br>". $classFriends[2]."</p>";

$courseFinished = array("CIS 201"=>"Web design","CIS 221"=>"Database","CIS 104"=>"Programming II");
echo "<br>";

echo "<ul>";

echo "<li>"."Course ONE: ". $courseFinished["CIS 201"]."</li>";
echo"<br>";
echo "<li>"."Course TWO: ". $courseFinished["CIS 221"]."</li>";
echo"<br>";
echo "<li>"."Course THREE: ". $courseFinished["CIS 104"]."</li>";

echo "</ul>";
$myArray = array(
    array("Laptop","MSI","ASUS"),
    array("CPU","AMD","Intel"),
    array("GPU","AMD","Nvidia")
);
echo"<br>";
echo"<br>";

echo "I am looking for ".$myArray[0][2]." ".$myArray[0][0]." with ".$myArray[1][1]." ".$myArray[1][0]." and ".$myArray[2][2]." ".$myArray[2][0];



?>
</body>
</html>