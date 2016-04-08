<?php
	require_once('../connect.php');
	$id = $_GET['id'];
	$query = mysql_query("select * from article where id = $id");
	$data = mysql_fetch_assoc($query);
//	print_r($query);


?>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<form name="form1" method="post" action="article.modify.handle.php">
	<input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
	<table>

		<tr>
			<td>标题</td>
			<td><input type="text" name="title" value="<?php echo $data['title'] ?>"/></td>
		</tr>
		<tr>
			<td>作者</td>
			<td><input type="text" name="author" value="<?php echo $data['author'] ?>"/></td>
		</tr>
		<tr>
			<td>描述</td>
			<td><input type="text" name="description" value="<?php echo $data['description'] ?>"/></td>
		</tr>
		<tr>
			<td>内容</td>
			<td><textarea name="content" cols="60" rows="15"><?php echo $data['content'] ?></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="提交"/></td>
		</tr>
	</table>
</form>

</body>

</html>