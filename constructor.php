<?php
class Class1{
    public $a=0;
    function __construct($y){
        echo "constructor"."<br>";
        echo $this->a+$y."<br>";
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
