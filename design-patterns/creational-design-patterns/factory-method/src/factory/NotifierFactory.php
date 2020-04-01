<?php

namespace Factory;

interface NotifierFactory
{
    public static function getNotifier($notifier, $to);    
}