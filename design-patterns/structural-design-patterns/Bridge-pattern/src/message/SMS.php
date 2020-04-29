<?php

class SMS implements Messenger
{
  public function send($body)
  {
    print("SMS" . $body);
  }
}
