<?php

include $_SERVER['DOCUMENT_ROOT'].'LiuYan/includes/db.inc.php';

$page = 0;
$pre = 0;
$next = 10;
if(isset($_GET['page'])) $page = $_GET['page'];

function getUsername($id){
	$sql = 'SELECT username FROM user WHERE id = '.$id.'';
	$s = $GLOBALS['pdo']->query($sql);
	$row = $s->fetch();
	return $row['username'];
}

function getReply($id){
	$sql = 'SELECT * FROM reply WHERE lyid = '.$id.'';
	$s = $GLOBALS['pdo']->query($sql);
	$re = '';
	$num = 1;
	if(!isset($_SESSION)){ session_start(); }
	while($row = $s->fetch()){
		$re .= '<div class="panel-inner" style="border:1px solid">
				'.getUsername($row['yhid']).':'.$row['content'].' 
			<div style="text-align:right">';
		if($_SESSION['usertype'] == 1) $re .= '<a href="javascript:;" onclick="deletere('.$row['id'].')">删除</a>';
		$re .= '【'.$num.'楼】【'.$row['time'].'】
			</div>
			</div>';
		$num++;
	}
	return $re;
}

function authority($id){
	if(!isset($_SESSION)){ session_start(); }
	if($_SESSION['usertype'] == 1){
		return '<a href="javascript:;" onclick="deletely('.$id.')">删除</a>';
	}
	return '';
}

try {
	$sql = 'SELECT COUNT(*) FROM liuyan';
	$s = $pdo->query($sql);
	$row = $s->fetch();
	$total = $row[0];
	$sql = 'SELECT * FROM liuyan ORDER BY time desc limit '.$page.' , 10';
	$s = $pdo->query($sql);
	while($row = $s->fetch()){
		echo '<div class="accordion-group" style="border:1px solid">
		        <div class="accordion-heading">
						<a class="accordion-toggle collapsed" data-toggle="collapse" href="#accordion-element-'.$row['id'].'"> '.$row['title'].' </a>
		        		【'.$row['time'].'】【'.getUsername($row['yhid']).'】第'.$row['id'].'条 '.authority($row['id']).'
		        </div>
	            <div id="accordion-element-'.$row['id'].'" class="accordion-body collapse">
	                <div class="accordion-inner"> '.$row['content'].' </div>
	                <div id="re'.$row['id'].'">
	                '.getReply($row['id']).'
	                </div>
	                <hr>
	                <textarea id="'.$row['id'].'" cols="" rows="3" placeholder="Reply"></textarea><br>
					<button class="btn btn-primary" onclick="Reply('.$row['id'].')"/>Reply</button>
	            </div>
    		</div>';
	}
	$pre = $page-10;
	$next = $page+10;
} catch (PDOException $e) {
	echo $e->getMessage();
}