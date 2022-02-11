<?php


class BankAccount
{
    const TAX = 0.08;
    public $account_nummber;
    private $balance = 0;


    public function __construct ($account_nummber)
    {
        $this->account_nummber = $account_nummber;
    }

    public function setBalance($balance)
    {
        if ($balance < 10000)
        {
            throw new Exception("L'argent est troooop petit");
        }
        $this->balance = $balance;
    }

    public function getBalance()
    {
        return $this->balance * 100;
    }
}

$compteAbdou = new BankAccount('1234568');



var_dump(BankAccount::TAX);