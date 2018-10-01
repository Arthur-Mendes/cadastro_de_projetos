<?php
try {
	$pdo3 = new PDO("mysql:dbname=software; host=localhost", "root", "");
	$pdo3->exec('SET CHARACTER SET utf8');

}catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();

	exit;
}