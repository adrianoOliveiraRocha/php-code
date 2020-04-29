<?php

class Phone extends Device
{
  public function send($body)
  {
    $body .= "\nSent from a phone.";
    return $this->sender->send($body);
  }
}
