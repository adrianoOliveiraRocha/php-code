<?php

require_once('src/message/Transmitter.php');
require_once('src/device/Device.php');
require_once('src/device/Phone.php');
require_once('src/device/Tablet.php');

require_once('src/message/Messenger.php');
require_once('src/message/SMS.php');
require_once('src/message/InstantMessenger.php');

$phone = new Phone();

$phone->setSender(new SMS()); // You need pass a instance of Messager here
$phone->send("Hello there!");
print("\n");

$phone->setSender(new InstantMessenger());
$phone->send("I am sending a instant message");
print("\n");
