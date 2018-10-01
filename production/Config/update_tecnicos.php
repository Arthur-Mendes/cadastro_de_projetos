<?php
session_start();
require 'conexao.php';
$id = $_SESSION['id'];

      $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
      $logradouro = filter_input(INPUT_POST, 'logradouro', FILTER_SANITIZE_SPECIAL_CHARS);
      $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
      $crea = filter_input(INPUT_POST, 'crea', FILTER_SANITIZE_NUMBER_INT);
      $fone1 = filter_input(INPUT_POST, 'fone1', FILTER_SANITIZE_NUMBER_INT);
      $fone2 = filter_input(INPUT_POST, 'fone2', FILTER_SANITIZE_NUMBER_INT);
      $email1 = filter_input(INPUT_POST, 'email1', FILTER_VALIDATE_EMAIL);
      $email2 = filter_input(INPUT_POST, 'email2', FILTER_VALIDATE_EMAIL);
      $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
      $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);

  $queryUpdate = $link->query("UPDATE tecnicos SET nome='$nome', logradouro='$logradouro', cpf='$cpf', crea='$crea', fone1='$fone1', fone2='$fone2', email1='$email1', email2='$email2', cidade='$cidade', bairro='$bairro' WHERE id='$id' ");
  $affected_rows = mysqli_affected_rows($link);
  if ($affected_rows > 0):
  	header("Location: ../PJ_Pesquisar_Tecnicos.php");
  endif;