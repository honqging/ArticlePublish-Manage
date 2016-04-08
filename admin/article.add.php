<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<form name="form1" method="post" action="article.add.handle.php">
			<table>
				<tr>
					<td>标题</td>
					<td><input type="text" name="title"/></td>
				</tr>	
				<tr>
					<td>作者</td>
					<td><input type="text" name="author"/></td>
				</tr>
				<tr>
					<td>描述</td>
					<td><input type="text" name="description"/></td>
				</tr>
				<tr>
					<td>内容</td>
					<td><textarea name="content" cols="60" rows="15"></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="提交"/></td>
				</tr>
			</table>
		</form>

	</body>

</html>