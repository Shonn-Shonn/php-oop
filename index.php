<?php

class BankAccount 
{
    public  $accountNumber;

    public $balance;

    public function deposit($amount)
    {
        if($amount > 0){
            $this->balance += $amount;
        }
    }

    public function withdraw($amount)
    {
        if($amount <= $this->balance){
            $this->balance -= $amount;
        }

        return false;
    }
}

$account = new BankAccount();

echo $account->accountNumber = 1;
echo $account->balance = 1;