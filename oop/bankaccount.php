<?php

class BankAccount
{
    protected $balance;

    public function __construct($initialBalance)
    {
        $this->balance = $initialBalance;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function withdraw($amount)
    {
        if($this->balance >= $amount)
        {
            $this->balance -= $amount;
        }else{
            throw new Exception("Insufficient balance.");
        }
    }
}

$account = new BankAccount(1000);

try
{
    echo "Starting transaction.\n";
    $amountToDeposit = 500;
    $amountToWithdraw = 200;

    $account->deposit(500);
    $account->withdraw(200);

    echo $account->getBalance();
}
catch(Exception $e)
{
    echo "Transaction failed. " . $e->getMessage() . "\n";
}