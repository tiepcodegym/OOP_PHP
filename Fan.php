<?php

class Fan
{
    var $SLOW;
    var  $MEDIUM;
    var $FAST;
    var $on;
    var $speed;
    var $radius;
    var $color;
    function __construct()
    {
        $this->SLOW = 1;
        $this->MEDIUM = 2;
        $this->FAST = 3;
        $this->speed = 'SLOW';
        $this->on = false;
        $this->radius = 5;
        $this->color = 'blue';
    }


    public function getSpeed()
    {
        return $this->speed;
    }

    public function getOn()
    {
        if($this->on){
            echo 'fan is on';
        }else{
            echo 'fan is off';
        }
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }


    public function setSpeed($num)
    {
        if($num==$this->SLOW){
            $this->speed='SLOW';
        };
        if($num==$this->MEDIUM){
            $this->speed='MEDIUM';
        };
        if($num==$this->FAST){
            $this->speed='FAST';
        };
    }

    public function setOn($num)
    {
        $this->on = !$this->on;
    }


    public function setRadius($num)
    {
        $this->radius = $num;
    }


    public function setColor($num)
    {
        $this->color = $num;
    }
    function toString(){
        if($this->on){
            echo $this->speed.', '.$this->color.', '.$this->radius.', '.'fan is on'.'<br>';
        }else{
            echo $this->color.', '.$this->radius.', '.'fan is off'.'<br>';
        }
    }

}

$fan1=new Fan();
$fan2=new Fan();
$fan1->toString();
$fan2->setSpeed(3);
$fan2->getradius();
$fan2->setradius(7);
$fan2->seton();
$fan2->toString();
?>
