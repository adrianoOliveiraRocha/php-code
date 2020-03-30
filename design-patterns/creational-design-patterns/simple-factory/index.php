<?php

require_once(__DIR__ . '/vendor/autoload.php');

$mobile = Factory\NotifierFactory::getNotifier("SMS", "07111111111");
echo $mobile->sendNotification();
echo "\n";
$email = Factory\NotifierFactory::getNotifier("Email", "test@example.com");
echo $email->sendNotification();
echo "\n";