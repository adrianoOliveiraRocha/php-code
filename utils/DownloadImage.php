<?php

namespace Utils;

class DownloadImage {
  
  public static function uploadImage($file, $uploadDirectory) {

    $currentDir = getcwd();
    $uploadDirectory = $uploadDirectory;

    $fileName = date("y-m-d-h-m-s") . '-' . $file['name'];
    $fileTmpName  = $file['tmp_name'];
    $uploadPath = $currentDir . $uploadDirectory . basename($fileName);

    if(move_uploaded_file($fileTmpName, $uploadPath)) {
      return $fileName;
    } else {
      return null;
    }
     
  }

}
