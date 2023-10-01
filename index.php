<?php
trait FlyableTrait{
   abstract public function fly();
   public function hello(){
    echo 'Hello i can fly';
}
}
trait EngineTrait{
    public function hello(){
        echo 'I have an engine';
    }
}
class Plain{
    use FlyableTrait,EngineTrait{
        FlyableTrait::hello insteadof EngineTrait;
        EngineTrait::hello as engineHello;
    }
    public function fly(){
        echo 'i am flying 800 km/h';
    }
}
// class Helycopter{
//     use FlyableTrait,EngineTrait;
//     public function fly(){
//         echo 'i am flying 300 km/h';
//     }
// }
// class Car{
//     use EngineTrait;
// }
$plain=new Plain();
//$plain->fly();
$plain->engineHello();
