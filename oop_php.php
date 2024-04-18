<?php

//Creating Student Class
class Student
{
    public $name;
    public $sex;
    public $studentNo;

    public function __construct($name, $sex, $studentNo)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->studentNo = $studentNo;
    }

    public function get_student_info()
    {
        return "My name is " . $this->name . ", I'm " . $this->sex . " by sex";
    }

    public function get_school_details()
    {
        return "I'm a student at Zuri training and my student number is" . $this->studentNo;
    }
}

//Creating student object
$student = new Student("Nankya Phiona", "Female", "CLA001085RZQ");
echo $student->get_student_info();
echo "\n";
echo $student->get_school_details();

//Lecture class that extends Student
class Lecture extends Student
{
    //Method in this class
    public function attend_lecture()
    {
        return "Hello there, my is " . $this->name . ". " . $this->get_school_details() . ". I attended lecture PHP OOP";
    }
}

//Creating Lecture object
$lecture = new Lecture("Nankya Phiona", "Female", "CLA001085RZQ");
echo "\n";
echo "\n";
echo $lecture->attend_lecture();
