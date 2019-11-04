<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>
	<?php 
include "../loginlock.php";
?>
	<form action="insert.php" method='POST'>
	<p>用户名：<input type="text" name='UserName'></p>
	<p>密码：<input type="text" name="Password"></p>
	<p>地址：<input type="text" name="Address"></p>
	<p>电话：<input type="text" name="Telephone"></p>
	<p>昵称: <input type="text" name="NickName"></p>
	<input type="submit" value="提交">
	</form>

</body>
</html>