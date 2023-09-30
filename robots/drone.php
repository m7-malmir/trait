<?php
trait DroneTrait{
    private $maxFlyingSpeed=0;
    private $maxFlyingTime;

    public function __construct($maxspeed,$maxflyingtime){
        $this->maxFlyingSpeed=$maxspeed;
        $this->maxFlyingTime=$maxflyingtime;
    }
    public function getMaxSpeed()
    {
        return $this->maxFlyingSpeed;
    }
    public function setMaxSpeed($maxFlyingSpeed)
    {
        $this->maxFlyingSpeed = $maxFlyingSpeed;

        return $this;
    }

    public function getMaxFlyingTime()
    {
        return $this->maxFlyingTime;
    }

    public function setMaxFlyingTime($maxFlyingTime)
    {
        $this->maxFlyingTime = $maxFlyingTime;

        return $this;
    }
}
class Drone{
    use DroneTrait;
    public $cameraResolution;
    public function __construct($maxspeed,$maxflyingtime,$cameraResolution){
        $this->maxFlyingSpeed=$maxspeed;
        $this->maxFlyingTime=$maxflyingtime;
        $this->cameraResolution=$cameraResolution;
    }
    public function getCameraResolution()
    {
        return $this->cameraResolution;
    }
 
    public function setCameraResolution($cameraResolution)
    {
        $this->cameraResolution = $cameraResolution;

        return $this;
    }
}