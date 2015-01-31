<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>留言板</title>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
	<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap-dropdown.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap-collapse.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap-transition.js"></script>
	<script type="text/javascript" src="bootstrap/js/ajax.js"></script>
</head>
<?php 
include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/yanzheng.php';
include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/head.php';


?>
<body style="background: #eeeeee">
<div class="container">
	<div class="row">
		<div class="span2"></div>
		<div class="span8">
	
<div class="accordion" id="LiuYan">
	<?php 
	include $_SERVER['DOCUMENT_ROOT'].'LiuYan/admin/show.php';
	?>
</div>

	<div class="pagination pagination-centered">
		<ul>
			<li>
				<a href="index.php">首页</a>
			</li>
			<li>
			<?php if($pre >= 0)
			echo '<a href="index.php?page='.$pre.'">上一页</a>';
				?>
				
			</li>
			<li>
			<?php if($next < $total)
				echo '<a href="index.php?page='.$next.'">下一页</a>';
			?>
				
			</li>
			<li>
				<a href="index.php?page=<?php if($total-10>=0) echo $total-10; else echo 0;?>">末页</a>
			</li>
		</ul>
	</div>

	<hr>
				<form action="admin/addly.php" method="post" class="form-horizontal">
<table class="form-horizontal">
				<tr>
    <td class="tdLabel"></td>
    <td><input type="text" value="" name="title" placeholder="Title" style="height: 30px"/></td>
</tr>

				<tr>
    <td class="tdLabel"></td>
    <td><textarea cols="" rows="3" name="content" placeholder="Content"></textarea></td>
</tr>
<br>
				<tr>
    <td colspan="2"><div align="right"><input type="submit" id="Discuss_0" value="Submit" class="btn btn-primary"/>
</div></td>
</tr>

				</table></form>

		</div>
	</div>
</div>
</body>
<?php include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/foot.php';?>
</html>
