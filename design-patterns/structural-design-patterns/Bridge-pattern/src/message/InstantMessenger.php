<?php

class InstantMessenger implements Messenger
{
  public function send($body)
  {
    print("instant message " . $body);
  }
}
