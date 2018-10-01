<?php
session_start();
require 'conexao.php';

$processo = $_SESSION['processo'];

  $queryDelete = $link->query("DELETE FROM demanda_projetos WHERE processo = '$processo'");

  $affected_rows = mysqli_affected_rows($link);

  if ($affected_rows > 0):

      header("Location: Insert_Historico_PJ.php");

  endif;

