<?php
require '../Config/Config.php';

 $transfBairro = $pdo->prepare("SELECT login FROM clientes WHERE nome='".$_POST['idLogin']."'" );
 $transfBairro->execute();



 		echo '<option>'.$bairro['nome'].'</option>';
 	}
?>