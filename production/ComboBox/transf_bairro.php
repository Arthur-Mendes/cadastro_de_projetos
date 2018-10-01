<?php
require '../Config/Config.php';

 $transfBairro = $pdo->prepare("SELECT * FROM bairro WHERE id='".$_POST['idBairro']."' ORDER BY nome ASC " );
 $transfBairro->execute();

 	$fetchAll = $transfBairro->fetchAll();
 	foreach ($fetchAll as  $bairro) {

 		echo '<option>'.$bairro['nome'].'</option>';
 	}
?>