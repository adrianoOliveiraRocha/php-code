<?php

namespace Factory;

class CourierNotifierFactory implements Notifierfactory
{
    public static function getNotifier($notifier, $to)
    {
        if(empty($notifier)) {
            throw new Exception("No notifier passed.");
        }

        switch($notifier) {
            case 'Post':
                return new \Models\Post($to);
            break;
            default:
                throw new Exception("Notifier invalid.");
            break;
        }
    }
}