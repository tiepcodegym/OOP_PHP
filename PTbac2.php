<?php

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }


    public function getC()
    {
        return $this->c;
    }

    function getDiscriminant()
    {
        return $this->b * $this->b - 4 * $this->a * $this->c;
    }

    function getRoot1()
    {
        return (-$this->b + sqrt($this->b * $this->b - 4 * $this->a * $this->c)) / (2 * $this->a);
    }

    function getRoot2()
    {
        return (-$this->b - sqrt($this->b * $this->b - 4 * $this->a * $this->c)) / (2 * $this->a);
    }
}

$PT = new QuadraticEquation(1, -4, 4);
if ($PT->getDiscriminant() > 0) {
    echo "x1= " . $PT->getRoot1();
    echo "<br>";
    echo "x2= " . $PT->getRoot2();
} else {
    if ($PT->getDiscriminant() == 0) {
        echo "x= " . $PT->getRoot1();
    } else {
        echo "PT vô nghiệm";
    }
}