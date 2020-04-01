<?php

namespace Factory;

class ElectronicNotifierFactory implements NotifierFactory
{
    public static function getNotifier($notifier, $to)
    {
        if(empty($notifier)) {
            throw new Exception("No notifier passed.");
        }

        switch ($notifier) {
            case 'SMS':
                return new \Models\SMS($to);
            break;
            case 'Email':
                return new \Models\Email($to, 'Adriano');
            break;
            default:
                throw new Exception("Notifier invalid");
            break;
        }
    }
}