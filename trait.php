<?php
class A{
    public $var1=10;
    public function hello(){
        echo 'Hello from  class A';
    }
}
trait traitA
{
    public function hello(){
        echo 'Hello from  trait A'. parent::hello().$this->var1;
    }
}
class B extends A{
    use traitA;
}
$ob=new B();
$ob->hello();
