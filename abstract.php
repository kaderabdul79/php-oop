<?php

abstract class Class1{
    public function show(){
        echo "show";
    }
    public function __construct(){
        echo "hi";
    }
    abstract public function display($say);
}
class Class2 extends Class1{
    public function show(){
        echo "show"."<br>";
    }
    public function display($say){
        echo $say;
    }
}
$obj = new Class2;
echo $obj->show();
echo $obj->display("hello abstract");