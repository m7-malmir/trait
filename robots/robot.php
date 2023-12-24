<?php
trait RobotTrait{
    private $maxRuningSpeed=0;
    private $maxWalkingTime;
    public function __construct($maxspeed,$maxwalkingtime){
        $this->maxRuningSpeed=$maxspeed;
        $this->maxWalkingTime=$maxwalkingtime;
    }
    public function getMaxSpeed()
    {
        return $this->maxRuningSpeed;
    }
    public function setMaxSpeed($maxRuningSpeed)
    {
        $this->maxRuningSpeed = $maxRuningSpeed;
        return $this;
    }
    public function getMaxWalkingTime()
    {
        return $this->maxWalkingTime;
    }
    public function setMaxWalkingTime($maxWalkingTime)
    {
        $this->maxWalkingTime = $maxWalkingTime;
        return $this;
    }
}
class Robot{
   use RobotTrait;
}