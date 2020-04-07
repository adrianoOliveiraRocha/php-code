<?php

namespace Helpers;

class Core {
  
  public static function uploadImage($file, $uploadDirectory) {

    $currentDir = getcwd();
    $uploadDirectory = $uploadDirectory;
    $errors = [];
    $fileExtensions = ['jpeg', 'jpg', 'png'];

    $fileName = $file['name'];
    $fileSize = $file['size'];
    $fileTmpName  = $file['tmp_name'];
    $fileType = $file['type'];
    $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
    $uploadPath = $currentDir . $uploadDirectory . basename($fileName);

    if(isset($_POST['submit'])) {
      
      if (! in_array($fileExtension, $fileExtensions)) {
        # code...
      }

    } else {
      
    }      
     
  }

}