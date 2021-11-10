<?php

class Rectangle
{
public $width;
public $height;
function __construct($width,$height){
    $this->width=$width;
    $this->height=$height;
}
function getDientich(){
    return $this->width*$this->height;
}
function getChuvi(){
    return ($this->width+$this->height)*2;
}
    public function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
$a=new Rectangle(10,20);
echo $a->getChuvi();
echo '<br>';
echo $a->getDientich();
echo "<br>";
echo $a->display();