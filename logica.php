<?php

//tipos de arquivo separados por arrays
$imagem = array("png", "jpeg", "jpg", "gif");
$texto = array("txt", "pdf", "doc");
$audio = array("wav", "mp3");
$video = array("mp4", "webm");


//o erro está aqui.
$arquivo = ($_POST['arquivo']);

// $quantidadeArquivos = count($_FILES['arquivo']['name']);
// $contador = 0;

// while ($contador <= $quantidadeArquivos):

	//passa a extensão do arquivo pra uma variável
	$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

	if(in_array($extensao, $imagem)):

		$pasta = "arquivos/imagem/";
		$temporario = $_FILES['arquivo']['tmp_name'][$contador];

		$novoNome = uniqid().".$extensao";

		if(move_uploaded_file($temporario, $pasta.$novoNome)):

			echo "upload de imagem feito com sucesso";

		else:

			echo "falha no upload";

		endif;

	elseif(in_array($extensao, $texto)):

		$pasta = "arquivos/texto/";
		$temporario = $_FILES['arquivo']['tmp_name'][$contador];

		$novoNome = uniqid().".$extensao";

		if(move_uploaded_file($temporario, $pasta.$novoNome)):

			echo "upload de texto feito com sucesso";

		else:

			echo "falha no upload";

		endif;

	elseif(in_array($extensao, $audio)):

		$pasta = "arquivos/audio/";
		$temporario = $_FILES['arquivo']['tmp_name'][$contador];

		$novoNome = uniqid().".$extensao";

		if(move_uploaded_file($temporario, $pasta.$novoNome)):

			echo "upload de audio feito com sucesso";

		else:

			echo "falha no upload";

		endif;

	elseif(in_array($extensao, $video)):

		$pasta = "arquivos/video/";
		$temporario = $_FILES['arquivo']['tmp_name'][$contador];

		$novoNome = uniqid().".$extensao";

		if(move_uploaded_file($temporario, $pasta.$novoNome)):

			echo "upload de vídeo feito com sucesso";

		else:

			echo "falha no upload";
		endif;

	endif;

// $contador++;
// endwhile;