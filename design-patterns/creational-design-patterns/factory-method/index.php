<?php

require_once(__DIR__ . '/vendor/autoload.php');

$mobile = Factory\ElectronicNotifierFactory::getNotifier("SMS", "07111111111");
echo $mobile->sendNotification() . "\n";

$email = Factory\ElectronicNotifierFactory::getNotifier("Email", "adriano.qwe32@gmail.com");
echo $email->sendNotification(). "\n";

$post = Factory\CourierNotifierFactory::getNotifier("Post", "10 Dowing Street, SW1A 2AA");
echo $post->sendNotification() . "\n";


