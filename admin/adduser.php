<?php
include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/db.inc.php';

$username = $_POST['username'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

try {
	$sql = 'SELECT * FROM user WHERE username = '.$username.'';
	$s = $pdo->query($sql);
	if($row = $s->fetch()){
		$registError = '该用户已存在>_<';
		include 'Regist.php';
		exit();
	}
	if($password1 != $password2){
		$registError = '密码错误>_<';
		include 'Regist.php';
		exit();
	}
	$sql = 'INSERT INTO user(username,password,type) VALUES ('.$username.','.$password1.',10)';
	$pdo->exec($sql);
	
} catch (PDOException $e) {
}