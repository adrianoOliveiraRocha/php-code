<?php

class Singleton
{

    private static $instance;

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    protected function __construct()
    {

    }

    private function clone() 
    {
        
    }

    public function wakeup(): string
    {
        return 'I did this today';
    }
}

// $s1 = Singleton::getInstance();
// var_dump($s1);

// $s2 = Singleton::getInstance();
// var_dump($s2);

class Transaction
{
    private $creditCardNumber;
    private $clientID;

    public function __construct(string $creditCardNumber, int $clientID)
    {
        $this->creditCardNumber = $creditCardNumber;
        $this->clientID = $clientID;
    }
}

$order = new Transaction('1234 5678 9012 3456', 26);