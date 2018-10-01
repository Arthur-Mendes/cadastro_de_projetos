<?php
session_start();
	if(strstr($_SESSION['setor'], 'Projeto') !== false){
		header("Location: PJ_Menu.php");
	}else{
		if(strstr($_SESSION['setor'], 'Planejamento') !== false){ 
			header("Location: PL_Menu.php");
		}else{
			if(strstr($_SESSION['setor'], 'Comercial') !== false){ 
				header("Location: C_Menu.php");
			}else {
				if(strstr($_SESSION['setor'], 'Geração Distribuida') !== false){ 
					header("Location: GD_Menu.php");
				}else {
					if(strstr($_SESSION['setor'], 'Cliente') !== false){ 
						header("Location: CL_Menu.php");
					}else {  
						header("Location: Menu/login.php");
					exit;
					}
				}
			}
		}
	}
?>