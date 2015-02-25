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
include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/yanzheng.php';
include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/head.php';

?>
<body style="background: #eeeeee">
<div class="container">
	<div class="row">
		<div class="span2"></div>
		<div class="span8" style="text-align:center">
  <h2>修改密码</h2>
<?php if(isset($modifyError)):?>
<p><?php echo $modifyError?></p>
<?php endif;?>
<form action="modifyuser.php" method="post">
<div style="text-align:center;">
<input type="password" name="inipassword" id="inipassword" placeholder="旧密码" style="height: 30px" ><br>
<input type="password" name="password1" id="password1" placeholder="新密码" style="height: 30px" ><br>
<input type="password" name="password2" id="password2" placeholder="确认新密码" style="height: 30px" ><br>
<input type="submit" value="提交" class="btn btn-success"><br>
</div>
</form>
</div>
</div>
</div>

</body>
<?php include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/foot.php';?>
</html>
