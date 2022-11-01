
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab_05</title>
<link rel="stylesheet" href="style.css">
</head>
<body>


<?php
include("Course.php");

$courseOne= new Course("CIS 201","Web Design","Building websites","A+");

$courseTwo= new Course("CIS 221","Database","Building databases","A");

$courseThree= new Course("CIS 202", "Data Structures","Learning about he concepts and algorithms of data","A");

$myArray=array($courseOne,$courseTwo,$courseThree);


echo"<table border = '1' width='500'>";

echo "<tr>";
            echo "<th>Course Code:</th>";
            echo "<th>Course Name</th>";
            echo "<th>Course Description</th>";
            echo "<th>Grade</th>";
echo "</tr>";
    foreach($myArray as $myArray){
        echo $myArray->cTable();
    }
      
echo"</table>";

?>




</body>
</html>