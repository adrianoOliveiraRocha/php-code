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

    if (! in_array($fileExtension, $fileExtensions)) {
        $errors[] = "Esse tipo de arquivo não é permitido. Por favor use arquivos do tipo JPEG, JPG ou PNG.";
    }

    if ($fileSize > 2000000) {
        $errors[] = "Esse arquivo tem mais de 2MB. Por favor, escolha um arquivo de tamanho menor ou igual a 2MB";
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

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

