<!DOCTYPE>
<html>
<head>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="span2"></div>
		<div class="span8">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container-fluid">
						 <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> <a href="#" class="brand">请留言</a>
						<div class="nav-collapse collapse navbar-responsive-collapse">
							<ul class="nav pull-right">
							<?php 
							if(isset($_SESSION['username'])){
								echo '<li>
									<a>'.$_SESSION['username'].'</a>
								</li>
								<li>
									<a href="index.php?action=logout">退出</a>
								</li>';
							}else {
								echo '<li>
									<a href="http://localhost/LiuYan/index.php">登录</a>
								</li>
								<li>
									<a href="http://localhost/LiuYan/admin/Regist.php">注册</a>
								</li>';
							}
							?>
								
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>
