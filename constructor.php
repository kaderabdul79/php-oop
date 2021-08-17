<?php
class Class1{
    public $a=0;
    function __construct($y){
        echo "constructor"."<br>";
        $this->a = 100;
        $this->y = 100;
        echo $a+$y."<br>";
    }
    function fun(){
        echo "fun"."<br>";
    }

    function __destruct(){
        echo "destructor";
    }
}

$obj = new Class1(20);
$obj->fun();
