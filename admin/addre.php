<?php
include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/db.inc.php';
date_default_timezone_set('Etc/GMT-8');//这里设置了时区
$content = $_GET['content'];
$lyid = $_GET['id'];
$time = date("Y-m-d H:i:s");

try {
	$sql = 'INSERT INTO reply(content,yhid,time,lyid) VALUES (:content,:yhid,:time,:lyid)';
	$s = $pdo->prepare($sql);
	$s->bindValue(':content', $content);
	if(!isset($_SESSION)){ session_start(); }
	$s->bindValue(':yhid', $_SESSION['userid']);
	$s->bindValue(':time', $time);
	$s->bindValue(':lyid', $lyid);
	$s->execute();
	echo '<div class="panel-inner" style="border:1px solid">
				'.$_SESSION['username'].':'.$content.' 
			<div style="text-align:right">
					【新楼】【'.$time.'】
			</div>
			</div>';
} catch (PDOException $e) {
	echo $e->getMessage();
}