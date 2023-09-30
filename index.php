<?php

trait MyTrait{
    public function fly(){
        echo 'I am flying';
    }
}
class Plain{
    use MyTrait;
}
class Helycopter{
    use MyTrait;
}

$plain=new Plain;
$helycopter=new Helycopter;
$plain->fly();
$helycopter->fly();