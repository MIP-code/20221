<?php
//attributes
class Course{
protected $courseCode;
protected $courseName;
protected $courseDescription;
protected $grade;


//methods for the attributes

function getCourseCode(){
    return $this->courseCode;
}

function setCourseCode($courseCode){
    $this->courseCode =$courseCode;
}

function getCourseName(){
    return $this->courseName;
}

function setCourseName($courseName){
    $this->courseName =$courseName;
}

function getCourseDescription(){
    return $this->courseDescription;
}

function setCourseDescription($courseDescription){
    $this->courseDescription =$courseDescription;
}




function getGrade(){
    return $this->grade;
}

function setGrade($grade){
    $this->grade =$grade;
}

function highestGrade($grade){
    if ($grade == "A+") {
        return true;
    }
}

}
?>