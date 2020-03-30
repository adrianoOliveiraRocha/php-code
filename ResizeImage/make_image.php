<?php
function geraimg($origem, $destino, $largura, $altura) {
	// Configurações
	$imagem_original = $origem;
	$pastadestino = $destino;
	$largura = $largura;
	$altura = $altura;
	
	// Cria Nome do Arquivo Novo
	$extensao = '.jpg';
	$nomearquivo = date ( 'dmY' );
	
	$arquivofinal = $nomearquivo;
	$i = 0;
	while ( file_exists ( $pastadestino . "/" . $arquivofinal . $extensao ) ) {
		$i ++;
		$arquivofinal = $nomearquivo . $i;
	}
	$nome_arquivo1 = $arquivofinal . $extensao;
	$destino = $pastadestino . "/" . $arquivofinal . $extensao;
	
	// Redimenciona a Imagem e faz o upload da mesma
	list ( $largura_original, $altura_original ) = getimagesize ( $imagem_original );
	
	try {
		$image_desejada = imagecreatetruecolor($largura, $altura);
	} catch (Exception $e) {
		echo $e->getFile();
	}
	$image_final = imagecreatefromjpeg ( $imagem_original );
	
	imagecopyresampled ( $image_desejada, $image_final, 0, 0, 0, 0, $largura, $altura, $largura_original, $altura_original );
	$resultado = imagejpeg ( $image_desejada, $destino, 100 );
	
	return $nome_arquivo1;
}
?>

<!-- chamada da função -->

<!-- if (! empty ( $_FILES ['file1'] ['name'] )) {
		$imgP1 = geraimg ( $_FILES ['file1'] ['tmp_name'], 'upload', 114, 114 );
		$imgG1 = geraimg ( $_FILES ['file1'] ['tmp_name'], 'upload', 600, 600 );
		$produto->setImgP1 ( $imgP1 );
		$produto->setImgG1 ( $imgG1 );
	} -->