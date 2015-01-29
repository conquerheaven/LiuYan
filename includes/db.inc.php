<?php
try{
	$pdo = new PDO('mysql:host=localhost;dbname=lysystem', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e){
	$output = 'Uable to connect to the database server: ' . $e->getMessage();
	include 'ConnectError.php';
	exit();
}