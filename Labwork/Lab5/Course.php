<?php
//attributes
class Course{
protected $courseCode;
protected $courseName;
protected $courseDescription;
protected $grade;

function __constructer($courseCode,$courseName,$courseDescription,$grade ){
    $this->courseCode=$courseCode;
    $this->courseName=$courseName;
    $this->courseDescription=$courseDescription;
    $this->grade=$grade;
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


function getGrade(){
    return $this->grade;
}

function setGrade($grade){
    $this->grade =$grade;
}

function hGrade(){
    if ($this->getGrade() == 'A+') {
        return true;
    }
}

function cTable(){
    if ($this->hGrade() == true) {
        echo "<tr class=Y>";
            echo "<td>".$this->getCourseCode()."</td>";
            echo "<td>".$this->getCourseName()."</td>";
            echo "<td>".$this->getCourseDescription()."</td>";
            echo "<td>".$this->getGrade()."</td>";
        echo "</tr>";
    
 
    }else{
        echo "<tr>";
            echo "<td>".$this->getCourseCode()."</td>";
            echo "<td>".$this->getCourseName()."</td>";
            echo "<td>".$this->getCourseDescription()."</td>";
            echo "<td>".$this->getGrade()."</td>";
        echo "</tr>";

    }
}

}
?>