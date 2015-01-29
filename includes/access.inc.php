<?php
function userIsLoggedIn(){
	if(isset($_POST['action']) and $_POST['action'] == 'login'){
		if(!isset($_POST['username']) or $_POST['username'] == '' or !isset($_POST['password']) or $_POST['password'] == ''){
			$GLOBALS['loginError'] = '请填写完整！';
			return false;
		}
		$password = md5($_POST['password']);
		if(databaseContainsUser($_POST['username'] , $password)){
			return true;
		}else{
			session_start();
			unset($_SESSION['loggedIn']);
			unset($_SESSION['username']);
			unset($_SESSION['password']);
			unset($_SESSION['usertype']);
			unset($_SESSION['userid']);
			$GLOBALS['loginError'] = '用户名或密码错误！';
			return false;
		}
	}
	if(isset($_GET['action']) and $_GET['action'] == 'logout'){
		session_start();
		unset($_SESSION['loggedIn']);
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		unset($_SESSION['usertype']);
		unset($_SESSION['userid']);
		return false;
	}
	session_start();
	if(isset($_SESSION['loggedIn'])){
		return databaseContainsUser($_SESSION['username'] , $_SESSION['password']);
	}
}

function databaseContainsUser($username , $password){
	include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/db.inc.php';
	
	try {
		$sql = 'SELECT id,type FROM user WHERE username = :username AND password = :password';
		$s = $pdo->prepare($sql);
		$s->bindValue(':username',$username);
		$s->bindValue(':password',$password);
		$s->execute();
	} catch (PDOException $e) {
		$error = '数据库错误！';
		include 'error.html';
		exit();
	}
	
	if($row = $s->fetch()){
		if(!isset($_SESSION)){ session_start(); }
		$_SESSION['usertype'] = $row['type'];
		$_SESSION['loggedIn'] = true;
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['userid'] = $row['id'];
		return true;
	}else return false;
}
