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
    public function setFee()
    {
        return $this->feePaid;
    }
    public function setCourse()
    {
        return $this->course();
    }
    public function setAge(){
        return $this->age();
    }
}
//creating an object
$matildah=new Student('matildah mariwa');
$matildah->setCourse="30";
$matildah->setFee="1000";
$matildah->setAge="28";

var_dump($matildah);
?>
