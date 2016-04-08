<?php
	require_once "../connect.php";
//	print_r($_POST);
	$title = $_POST['title'];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	$dateline = time();

	$mysql_insert = "insert into article(title, author, description, content, dateline) values('$title', '$author', '$description', '$content', $dateline)";
	echo $mysql_insert;

	if(mysql_query($mysql_insert)){
		echo "<script>
				alert('发布成功...');
				window.location.href = 'article.add.php';
			</script>";
	}else{

		echo "<script>
				alert('发布失败...');
//				window.location.href = 'article.add.php';
			</script>";
	}
	echo $dateline;





