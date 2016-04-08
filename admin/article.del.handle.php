<?php
	require_once('../connect.php');
	$id = $_GET['id'];
	$mysql_del = "delete from article where id = $id";
//	echo $mysql_del;
	if(mysql_query($mysql_del)){
		echo "<script> alert('删除成功');window.location.href = 'article.manage.php';</script>";

	}else{
		echo "<script> alert('删除失败');</script>";

	}

