<?php
include 'drone.php';
include 'robot.php';

class FlyinRobot{
    use DroneTrait, RobotTrait{
        DroneTrait::setMaxSpeed insteadof RobotTrait;
        DroneTrait::getMaxSpeed insteadof RobotTrait;
        DroneTrait::setMaxSpeed as setFlyingMaxSpeed;
        DroneTrait::getMaxSpeed as getFlyingMaxSpeed;
        RobotTrait::setMaxSpeed as setRunningMaxSpeed;
        RobotTrait::getMaxSpeed as getRunningMaxSpeed;
    }
    public function __construct($maxRuningSpeed,$maxWalkingTime,$maxFlyingSpeed,$maxFlyingTime)
    {
        $this->maxWalkingTime=$maxWalkingTime;
        $this->maxFlyingTime=$maxFlyingTime;
        $this->setFlyingMaxSpeed($maxFlyingSpeed);
        $this->setRunningMaxSpeed($maxRuningSpeed);
    }
}
$a=new FlyinRobot(40,120,60,30);
echo $a->getMaxSpeed();
echo $a->getFlyingMaxSpeed();
echo $a->getRunningMaxSpeed();