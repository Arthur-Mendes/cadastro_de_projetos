<?php
	$arquivo = $_FILES['file'];
	$templocation = $arquivo["tmp_name"];
	$name = $arquivo["name"];

	if (!$templocation) {
		die('Não foi selecionado nenhum arquivo');
	}

	if (move_uploaded_file($templocation, "../Arquivos/GD/Documentos_Clientes/CDR/$name")) {
		echo "Arquivo enviado com sucesso";
	}else{
		echo "Erro ao enviar o arquivo";
	}

?>