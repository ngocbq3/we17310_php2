<?php

class Student
{
    public $rollNo;
    public $name;

    public function getInfo()
    {
        echo "Sinh viên có tên {$this->name} có mã số {$this->rollNo}<br />";
    }

    public function getClass()
    {
        return $this;
    }
}

$student = new Student;
$student->name = "Quang Minh";
$student->rollNo = "PH12345";
// var_dump($student->getClass());
$student->getInfo();
