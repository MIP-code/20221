<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab_05</title>
</head>
<body>


<?php
//attributes
class Course{
public $courseCode;
public $courseName;
public $courseDescription;
public $grade;
}

//methods for the attributes
function setCourseCode($courseCode){
    $this->courseCode =$courseCode;
}
function getCourseCode(){
    return $this->courseCode;
}

function setCourseName($courseName){
    $this->courseName =$courseName;
}
function getCourseName(){
    return $this->courseName;
}

function setCourseDescription($courseDescription){
    $this->courseDescription =$courseDescription;
}
function getCourseDescription(){
    return $this->courseDescription;
}

function setGrade($grade){
    $this->grade =$grade;
}
function getGrade(){
    return $this->grade;
}

function highestGrade($grade){
    if ($grade == "A+") {
        return true;
    }
}

function getAllinfo(){
    echo($courseCode.$courseName.$courseDescription.$grade);
}

$course1= new Course();
$course1->setCourseCode("CIS 201");
$course1->setCourseName("Fundementals of web design");
$course1->setCourseDescription("Building websites");
$course1->setGrade("A+");

$course1->getCourseCode();
$course1->getCourseName();
$course1->getCourseDescription();
$course1->getGrade();

$course2= new Course();
$course2->setCourseCode("CIS 221");
$course2->setCourseName("Intro to Database");
$course2->setCourseDescription("Creating Databases");
$course2->setGrade("A");

$course2->getCourseCode();
$course2->getCourseName();
$course2->getCourseDescription();
$course2->getGrade();


$course3= new Course();
$course3->setCourseCode("CIS 202");
$course3->setCourseName("Data Structures");
$course3->setCourseDescription("About algorithms and the structures of data");
$course3->setGrade("A");

$course3->getCourseCode();
$course3->getCourseName();
$course3->getCourseDescription();
$course3->getGrade();

$myArray1[]=$course1->getAllinfo();

$myArray2[]=$course2->getAllinfo();

$myArray3[]=$course3->getAllinfo();

echo"<table border = '1' width='300'>";


echo "<tr>";
            echo "<th>Course Code:</th>";
            echo "<th>Course Name</th>";
            echo "<th>Course Description</th>";
            echo "<th>Grade</th>";
echo "</tr>";

        echo "<tr>";
            echo "<td>$course1->getCourseCode();</td>";
            echo "<td>$course1->getCourseName();</td>";
            echo "<td>$course1->getCourseDescription</td>";
            echo "<td>$course1->getGrade();</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>$course2->getCourseCode();</td>";
        echo "<td>$course2->getCourseName();</td>";
        echo "<td>$course2->getCourseDescription</td>";
        echo "<td>$course2->getGrade();</td>";

        echo "<tr>";
        echo "<td>$course3->getCourseCode();</td>";
        echo "<td>$course3->getCourseName();</td>";
        echo "<td>$course3->getCourseDescription</td>";
        echo "<td>$course3->getGrade();</td>";
    echo "</tr>";

    echo "</tr>";
echo"</table>";

?>



</body>
</html>