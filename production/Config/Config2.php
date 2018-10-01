<?php
try {
	$pdo2 = new PDO("mysql:dbname=software; host=localhost", "root", "");
	$pdo2->exec('SET CHARACTER SET utf8');

}catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();

	exit;
}