<?php
session_start();
require 'conexao.php';

$processo = $_SESSION['processo'];

      $ordem = filter_input(INPUT_POST, 'ordem', FILTER_SANITIZE_SPECIAL_CHARS);
      $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
      $interessado = filter_input(INPUT_POST, 'interessado', FILTER_SANITIZE_SPECIAL_CHARS);
      $tecnico = filter_input(INPUT_POST, 'tecnico', FILTER_SANITIZE_SPECIAL_CHARS);
      $uc = filter_input(INPUT_POST, 'uc', FILTER_SANITIZE_SPECIAL_CHARS);
      $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
      $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
      $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
      $coordenada_x = filter_input(INPUT_POST, 'coordenada_x', FILTER_SANITIZE_SPECIAL_CHARS);
      $coordenada_y = filter_input(INPUT_POST, 'coordenada_y', FILTER_SANITIZE_SPECIAL_CHARS);
      $data_prevista = filter_input(INPUT_POST, 'data_prevista', FILTER_SANITIZE_SPECIAL_CHARS);
      $data_entrada = filter_input(INPUT_POST, 'data_entrada', FILTER_SANITIZE_SPECIAL_CHARS);
      $demanda_prevista = filter_input(INPUT_POST, 'demanda_prevista', FILTER_SANITIZE_SPECIAL_CHARS);
      $potencia_instalada = filter_input(INPUT_POST, 'potencia_instalada', FILTER_SANITIZE_SPECIAL_CHARS);
      $ultima_alteracao = filter_input(INPUT_POST, 'ultima_alteracao', FILTER_SANITIZE_SPECIAL_CHARS);
      $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_SPECIAL_CHARS);
      $pasta = filter_input(INPUT_POST, 'pasta', FILTER_SANITIZE_SPECIAL_CHARS);
      $atribuido = filter_input(INPUT_POST, 'atribuido', FILTER_SANITIZE_SPECIAL_CHARS);
      $observacao = filter_input(INPUT_POST, 'observacao', FILTER_SANITIZE_SPECIAL_CHARS);


  $queryUpdate = $link->query("UPDATE projetos SET descricao='$descricao', ordem='$ordem', interessado='$interessado', tecnico='$tecnico', uc='$uc', cpf='$cpf', cidade='$cidade', bairro='$bairro', coordenada_x='$coordenada_x', coordenada_y='$coordenada_y', demanda_prevista='$demanda_prevista', data_prevista='$data_prevista', data_entrada='$data_entrada', potencia_instalada='$potencia_instalada', ultima_alteracao='$ultima_alteracao', status='$status', pasta='$pasta', atribuido='$atribuido', observacao='$observacao'   WHERE processo='$processo' ");

  $affected_rows = mysqli_affected_rows($link);

  if ($affected_rows > 0):
      header("Location: Insert_Historico2_PJ.php");

  endif;

