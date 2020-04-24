<?php

include_once('src/Insurance.php');
include_once('src/MarketCompare.php');
include_once('src/InsuranceMarketCompare.php');

$quote = new Insurance(10000, 250);
print($quote->monthlyPremium() . "\n");

$quote = new InsuranceMarketCompare(10000, 250);
print($quote->getMonthlyPremium() . "\n");
print($quote->getAnnualPremium());