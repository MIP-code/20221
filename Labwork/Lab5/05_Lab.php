<?php
include("Course.php");

$courseOne= new Course();
$courseOne->setCourseCode('CIS 201');
$courseOne->setCourseName('Web Design');
$courseOne->setCourseDescription('Building websites');
$courseOne->setGrade('A+');

$courseTwo= new Course();
$courseTwo->setCourseCode('CIS 221');
$courseTwo->setCourseName('Database systems');
$courseTwo->setCourseDescription('Building databeases');
$courseTwo->setGrade('A');

$courseThree= new Course();
$courseThree->setCourseCode('CIS 202');
$courseThree->setCourseName('Data Structures');
$courseThree->setCourseDescription('Learning about he concepts and algorithms of data');
$courseThree->setGrade('A');




echo"<table border = '1' width='500'>";

echo "<tr>";
            echo "<th>Course Code:</th>";
            echo "<th>Course Name</th>";
            echo "<th>Course Description</th>";
            echo "<th>Grade</th>";
echo "</tr>";

        echo "<tr>";
            echo '<td>'.$courseOne->getCourseCode();'</td>';
            echo '<td>'.$courseOne->getCourseName();'</td>';
            echo '<td>'.$courseOne->getCourseDescription();'</td>';
            echo '<td>'.$courseOne->getGrade();'</td>';
        echo "</tr>";

        echo "<tr>";
            echo '<td>'.$courseTwo->getCourseCode();'</td>';
            echo '<td>'.$courseTwo->getCourseName();'</td>';
            echo '<td>'.$courseTwo->getCourseDescription();'</td>';
            echo '<td>'.$courseTwo->getGrade();'</td>';
        echo "</tr>";

        echo "<tr>";
            echo '<td>'.$courseThree->getCourseCode();'</td>';
            echo '<td>'.$courseThree->getCourseName();'</td>';
            echo '<td>'.$courseThree->getCourseDescription();'</td>';
            echo '<td>'.$courseThree->getGrade();'</td>';
        echo "</tr>";

echo"</table>";

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab_05</title>
</head>
<body>






</body>
</html>