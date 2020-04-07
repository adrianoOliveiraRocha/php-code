<?php

namespace Helpers;

class Core {
  
  public static function uploadImage($file, $uploadDirectory) {

    $response = false;

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
      
      if (!in_array($fileExtension, $fileExtensions)) {
        $errors[] = "Esse tipo de arquivo não é permitido. Por favor use arquivos do tipo JPEG, JPG ou PNG.";
      }

      if($fileSize > 2000000) {
        $errors[] = "Esse arquivo tem mais de 2MB. Por favor, escolha um arquivo de tamanho menor ou igual a 2MB";
      }

      if(empty($errors)) {
        return move_uploaded_file($fileTmpName, $uploadPath); // return true      
      } else {
        return $errors;
      }

    }     
     
  }

}