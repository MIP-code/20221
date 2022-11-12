
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab_05</title>
<link rel="stylesheet" href="../Lab5/style.css">
</head>
<body>


<?php
include("Course.php");

$courseOne= new Course();
$courseOne->setCourseCode("CIS 201");
$courseOne->setCourseName("Web design");
$courseOne->setCourseDescription("Build websites");
$courseOne->setGrade("A+");

$courseTwo= new Course();
$courseTwo->setCourseCode("CIS 221");
$courseTwo->setCourseName("Database");
$courseTwo->setCourseDescription("Build databases");
$courseTwo->setGrade("A");

$courseThree= new Course();
$courseThree->setCourseCode("CIS 202");
$courseThree->setCourseName("Data Structure");
$courseThree->setCourseDescription("Learning about algorthims");
$courseThree->setGrade("A");


$myArray=array($courseOne, $courseTwo, $courseThree);


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