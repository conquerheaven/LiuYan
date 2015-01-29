<?php

include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/db.inc.php';
date_default_timezone_set('Etc/GMT-8');//这里设置了时区
$title = $_POST['title'];
$content = $_POST['content'];
$time = date("Y-m-d H:i:s");

try {
	$sql = 'INSERT INTO liuyan(title,content,yhid,time) VALUES (:title,:content,:yhid,:time)';
	$s = $pdo->prepare($sql);
	$s->bindValue(':title', $title);
	$s->bindValue(':content', $content);
	if(!isset($_SESSION)){ session_start(); }
	$s->bindValue(':yhid', $_SESSION['userid']);
	$s->bindValue(':time', $time);
	$s->execute();
	header("refresh:3;url=../index.php");
	echo '留言成功^_^……三秒后自动跳转';
} catch (PDOException $e) {
	$error = $e;
	include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/error.php';
}