<?php
session_start();
require 'conexao.php';

$processo = $_SESSION['processo'];

      $querySelect1 = $link->query("SELECT * FROM projetos WHERE processo ='$processo'");

    while($registros = $querySelect1->fetch_assoc()):
      $processo = $registros['processo'];
      $status = $registros['status'];
      $atribuido = $registros['atribuido'];
      $ultima_alteracao = $registros['ultima_alteracao'];


    endwhile;

  $queryUpdate = $link->query("INSERT INTO historico (processo, status, atribuido, setor, data) VALUES ('$processo','$status','$atribuido', 'Projeto', '$ultima_alteracao')");

  $affected_rows = mysqli_affected_rows($link);

  if ($affected_rows > 0):

      header("Location: ../PJ_Pesquisa.php");

      $affected2_rows = mysqli_affected_rows($link2);

  endif;

