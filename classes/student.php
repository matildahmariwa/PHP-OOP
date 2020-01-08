<?php
//creating class
class Student{

    public $name;
    public $course;
    public $feePaid;
    public $age;


    public function __construct($name){

        $this->name=$name;

    }
    public function setFee($feePaid)
    {
        $this->feePaid=$feePaid;
        return $this->$feePaid;
    }
    public function setCourse($course)
    {
        $this->course=$course;
        return $this->$course;
    }
    public function setAge($age){
        $this->age=$age;
        return $this->$age;
    }
}
//creating an object
$matildah=new Student('matildah mariwa');
$matildah->setCourse("jnsnasc");
$matildah->setFee(1000);
$matildah->setAge(28);

var_dump($matildah);
?>
