<?php

namespace Controller;

class Core {

  public static function uploadImage($file, $uploadDirectory) {
    \Helpers\Core::uploadImage($file, $uploadDirectory);
  }    

}