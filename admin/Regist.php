<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>注册</title>
	<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
	<link href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap-dropdown.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap-collapse.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap-transition.js"></script>
</head>
<?php 
include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/head.php';

?>
<body style="background: #eeeeee">
<div class="container">
	<div class="row">
		<div class="span2"></div>
		<div class="span8" style="text-align:center">
  <h2>注册</h2>
<?php if(isset($registError)):?>
<p><?php echo $registError?></p>
<?php endif;?>
<form action="admin/adduser.php" method="post">
<div style="text-align:center;">
<input type="text" name="username" id="username" placeholder="用户名" ><br>
<input type="password" name="password1" id="password1" placeholder="密码" ><br>
<input type="password" name="password2" id="password2" placeholder="确认密码" ><br>
<input type="submit" value="登录" class="btn btn-success"><br>
</div>
</form>
</div>
</div>
</div>

</body>
<?php include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/foot.php';?>
</html>
