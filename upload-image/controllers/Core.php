<?php

namespace Controller;

class Core {

  public static function uploadImage($file, $uploadDirectory) {
    $response = \Helpers\Core::uploadImage($file, $uploadDirectory);
    echo $response;
  }    

}