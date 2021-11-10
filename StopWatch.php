<?php

class StopWatch
{
    private $startTime;
    private $endTime;
function __construct($startTime,$endTime){
    $this->startTime = $startTime;
    $this->endTime = $endTime;
}

    public function getStartTime()
    {
        return $this->startTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }


}