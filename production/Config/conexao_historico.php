<?php
session_start();
require 'conexao.php';

	$funcionario = $_POST['atribuido'];
	$processo = $_POST['processo'];


	for($i=0;$i<$_POST['num'];$i++){
		$select = $link->query("INSERT INTO historico (processo, setor, atribuido, status, data) VALUES ('$processo', 'Projeto', '$funcionario', '".$_POST['status'][$i]."',  '".$_POST['data'][$i]."')");
	}

	$affected_rows = mysqli_affected_rows($link);

  	if ($affected_rows > 0):

    header("Location: ../PJ_Cadastrar_Historico.php");

    ?>
	
	<div class="alert alert-success alert-dismissible fade show" role="alert">
		Histórico(s) cadastrado(s) com sucesso!
		<button class="close" data-dismiss="alert" aria-label="Fechar">
			<span aria-hidden="true">&times;</span>
		</button>

	</div>


    <?php

    endif;

?>


