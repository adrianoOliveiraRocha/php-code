<?php
$currentDir = getcwd();
$uploadDirectory = "/uploads/";

$errors = []; // Store all foreseen and unforseen errors here

$fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

$fileName = $_FILES['myfile']['name'];
$fileSize = $_FILES['myfile']['size'];
$fileTmpName  = $_FILES['myfile']['tmp_name'];
$fileType = $_FILES['myfile']['type'];
$fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

$uploadPath = $currentDir . $uploadDirectory . basename($fileName); 

if (isset($_POST['submit'])) {

    if (! in_array($fileExtension,$fileExtensions)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }

    if ($fileSize > 2000000) {
        $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
    }

    if (empty($errors)) {
        
        $percent = 0.5;
                
        list($width, $height) = getimagesize($fileTmpName);
        $newwidth = $width * $percent;
        $newheight = $height * $percent;

        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        $source = imagecreatefromjpeg($fileTmpName);

        //Resize
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
        $didUpload = move_uploaded_file($thumb, $uploadPath);


        if ($didUpload) {
            echo "The file " . basename($fileName) . " has been uploaded";
        } else {
            echo "Ocorreu um erro. Tente novamente ou entre em contato com o".
            " desenvolvedor";
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "These are the errors" . "\n";
        }
    }
}

echo "</br>file name: " . $fileName;

?>

