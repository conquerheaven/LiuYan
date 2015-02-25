<?php
include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/db.inc.php';

$lyid = $_GET['id'];

try {
	$sql = 'DELETE FROM liuyan WHERE id='.$lyid.'';
	$pdo->exec($sql);
	$sql = 'DELETE FROM reply WHERE lyid='.$lyid.'';
	$pdo->exec($sql);
	include $_SERVER['DOCUMENT_ROOT'].'LiuYan/admin/show.php';
} catch (PDOException $e) {
	echo $e->getMessage();
}