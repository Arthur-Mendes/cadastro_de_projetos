<?php
session_start();
require '../conexao.php';

  $processo = filter_input(INPUT_GET, 'processo', FILTER_SANITIZE_SPECIAL_CHARS);

  $queryUpdate = $link->query("UPDATE geracao_distribuida SET status='Validação'  WHERE protocolo='$processo' ");

  $affected_rows = mysqli_affected_rows($link);

  if ($affected_rows > 0):

      header("Location: ../../CL_Menu.php");

  endif;
  