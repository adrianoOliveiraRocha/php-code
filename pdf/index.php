<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>  
</head>
<body>
  
  <?php
  
  require_once('vendor/autoload.php');

  $pdf = new \Clegginabox\PDFMerger\PDFMerger;

  // $pdf->addPDF('docs/1.pdf', 'all');
  $pdf->addPDF('docs/2.pdf', 'all');
  $pdf->addPDF('docs/3.pdf', 'all');
  $pdf->addPDF('docs/4.pdf', 'all');

  $pdf->merge('file', 'samplepdfs/erudit-piano.pdf', 'P');

  ?>

</body>
</html>