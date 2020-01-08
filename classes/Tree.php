<?php
include "autoload.php";

class Tree implements Vegetation {
    public $circumference='';
    public $gFactor='';
    function __construct($circumference, $gFactor)
    {
        $this->circumference = $circumference;
        $this->gFactor = $gFactor;

    }

    public function CalculateAge(){
        echo "This returns the area";
    }
    public function grow(){
        return "Hurray the tree is growing";
    }
}
$oak=new Tree(7,9);
echo $oak->grow();
?>
