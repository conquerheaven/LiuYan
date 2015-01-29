<!DOCTYPE>
<html>
<head>
</head>
<body style="background: #eeeeee">
<div class="container">
	<div class="row">
		<div class="span2"></div>
		<div class="span8" style="text-align:center">
  <h2>登录</h2>
<?php if(isset($loginError)):?>
<p><?php echo $loginError?></p>
<?php endif;?>
<form action="" method="post">
<div style="text-align:center;">
<input type="text" name="username" id="username" placeholder="用户名" ><br>
<input type="password" name="password" id="password" placeholder="密码" ><br>
<input type="submit" value="登录" class="btn btn-success"><br>
<input type="hidden" name="action" value="login" />
</div>
</form>
</div>
</div>
</div>

</body>
</html>
