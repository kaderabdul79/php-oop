<?php

class BankAccount{
    public $accountNo;
    public $balance;

    public function deposit($amount){
        if($amount > 0){
            $this->balance += $amount;
            //return $this->balance;
        }
    }

    // public function withdraw($amount){
    //     if($amount <= $this->balance){
    //         $this->balance -= $amount;
    //         return true;
    //     }
    //     return false;
    // }
}
//$account = new BankAccount();
$account = new BankAccount;
$account->accountNo = 1;
$account->balance = 200;

$account->deposit(300);
//print_r($account);