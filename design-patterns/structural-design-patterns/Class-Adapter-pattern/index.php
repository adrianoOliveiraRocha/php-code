<?php

require_once('src/ATM.php');
require_once('src/ATMWithPhoneTopUp.php');

$atm = new ATM(500.00);
$atm->withdraw(50);
print($atm->getBalance() . "\n");

$adaptedATM = new ATMWithPhoneTopUp(500.00);
print("Top-up code: " . $adaptedATM->getTopUp(50, time()));
print("\n");
print($adaptedATM->getBalance() . "\n");

