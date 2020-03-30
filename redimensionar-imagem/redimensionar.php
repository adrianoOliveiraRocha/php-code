<?php

	$porcentagem_altura = 0.5;
	$porcentagem_largura = 0.5;

	switch($_FILES['arquivo']['type']):
		case 'image/jpeg';
		case 'image/pjpeg';
			$imagem_temporaria = imagecreatefromjpeg($_FILES['arquivo']['tmp_name']);
			
			$largura_original = imagesx($imagem_temporaria);
			
			$altura_original = imagesy($imagem_temporaria);
			
			$nova_largura = floor($largura_original * $porcentagem_largura);
			
			$nova_altura = floor($altura_original * $porcentagem_altura);
			
			$imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
			imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);
			
			imagejpeg($imagem_redimensionada, 'arquivo/' . $_FILES['arquivo']['name']);
			
			echo "<img src='arquivo/".$_FILES['arquivo']['name']."'>";
			
			
		break;
		
		//Caso a imagem seja extensão PNG cai nesse CASE
		case 'image/png':
		case 'image/x-png';
			$imagem_temporaria = imagecreatefrompng($_FILES['arquivo']['tmp_name']);
			
			$largura_original = imagesx($imagem_temporaria);
			$altura_original = imagesy($imagem_temporaria);
			
			$nova_largura = floor($largura_original * $porcentagem_largura);
			
			$nova_altura = floor($altura_original * $porcentagem_altura);
			
			/* Retorna a nova imagem criada */
			$imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
			
			/* Copia a nova imagem da imagem antiga com o tamanho correto */
			//imagealphablending($imagem_redimensionada, false);
			//imagesavealpha($imagem_redimensionada, true);

			imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);
			
			//função imagejpeg que envia para o browser a imagem armazenada no parâmetro passado
			imagepng($imagem_redimensionada, 'arquivo/' . $_FILES['arquivo']['name']);
			
			echo "<img src='arquivo/" .$_FILES['arquivo']['name']. "'>";
		break;
	endswitch;
?>