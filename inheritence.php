<?php
class Class1{
    function __construct(){
        echo "constructor1"."<br>";
        $this->num=2;
    }
    function fun(){
        echo "fun1"."<br>";
    }
}
class Class2 extends Class1{
    function __construct(){
        $this->num=1;
        parent::__construct();
        $this->num=3;
        echo "constructor2"."<br>";
    }
    // function fun(){
    //     echo "fun2"."<br>";
    // }
}
$obj = new Class2;
$obj->fun();
echo $obj->num;