<?php
try {
	$pdo4 = new PDO("mysql:dbname=software; host=localhost", "root", "");
	$pdo4->exec('SET CHARACTER SET utf8');

}catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();

	exit;
}