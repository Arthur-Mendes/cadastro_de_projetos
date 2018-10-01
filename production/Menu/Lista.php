<?php 
	session_start();
	require("../Config/conexao.php");
	$id_de = $_SESSION['usuario'];


    $resultado = $link->query("SELECT * FROM (SELECT * FROM mensagens ORDER BY id DESC LIMIT 10 ) sub ORDER BY id ASC");

    // ("SELECT * FROM (Select * FROM mensagens WHERE (id_de = '$id_de' AND id_para = '$id_para') OR (id_de = '$id_para' AND id_para = '$id_de') ORDER BY id DESC LIMIT 25) sub ORDER BY id ASC");

    while($row = $resultado->fetch_assoc()):

?>

<?php if ($row['id_cliente'] == $id_de) {?>
<div align="right"><p class="chat-i"><?php echo $row['mensagem'];?></p></div>
<?php }else if($row['id_cliente'] != $id_de) {?>
<div align="left"><p class="chat-you"><?php echo $row['mensagem'];?></p></div>
<?php
        }
    endwhile;

?>