<?php

// File and new size
$filename = 'uploads/nega.png';
$percent = 0.5;
$uploadPath = 'uploads/thumb'

// Load
$source = imagecreatefromjpeg($filename);

// Resize
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
// Output
$didUpload = move_uploaded_file($thumb, $uploadPath);
?>
