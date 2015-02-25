<?php
include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/db.inc.php';

if(!isset($_SESSION)){ session_start(); }
$inipassword = $_POST['inipassword'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

if($_SESSION['password'] != md5($inipassword)){
	$modifyError = '原密码错误!';
	include 'Modify.php';
	exit();
}

if($password1 != $password2){
	$modifyError = '两次密码不同';
	include 'Modify.php';
	exit();
}

try {
	$sql = 'update user set password = md5("'.$password1.'") where username="'.$_SESSION['username'].'"';
	$pdo->exec($sql);
	$_SESSION['password'] = md5($password1);
	$modifyError = '修改成功^_^';
	include 'Modify.php';
} catch (PDOException $e) {
	$registError = '数据库错误>_< .. '.$e->getMessage();
	include 'Modify.php';
	exit();
}