<?php
try {
	$pdo = new PDO("mysql:dbname=software; host=localhost", "root", "");
	$pdo->exec('SET CHARACTER SET utf8');

}catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();

	exit;
}