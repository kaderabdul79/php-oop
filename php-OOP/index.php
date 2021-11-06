<?php

class BankAccount{
    public $a=1;
    public function display(){
       echo "learning php OOP"."<br>";
       echo $this->a."<br>";
    //    echo $this->a++."<br>";
    //     echo $this->a."<br>";
       echo ++$this->a."<br>";
   }

   public function cal(){
    echo $this->a--."<br>";
   }
}
$account1 = new BankAccount;
$account2 = new BankAccount;

$account1->display();
$account2->cal();
echo $account2->a;