<?php
require_once $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/access.inc.php';

if(!userIsLoggedIn()){
	//echo $_POST['username'].$_POST['password'];
	include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/head.php';
	include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/login.php';
	include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/foot.php';
	exit();
}

?>