<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	table{
		width:90%;
		border:1px dashed #888;
		border-collapse: collapse;
	}
	td,th{
		border:1px dashed #888;
		text-align: center;
		height:30px;
	}
	</style>
</head>
<body>
<?php
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
?>
<table>
	<tr>
	<th>用户名</th>
	<th>密码</th>
	<th>电话</th>
	<th>地址</th>
	<th>昵称</th>
	<th>编辑</th>
	<th>删除</th>
</tr>
<?php 
$sql="select * from users";
$res=$mySQL->query($sql);
while($row=$res->fetch_array())
{
	?>
	<tr>
	<td><?php echo $row['UserName'];?></td>
	<td><?php echo $row['Password']?></td>
	<td><?php echo $row['Telephone']?></td>
	<td><?php echo $row['Address']?></td>
	<td><?php echo $row['Nickname']?></td>
	<td><a href="edit.php?userName=<?php echo $row['UserName'];?>">编辑</a></td>
	<td><a href="delete.php?userName=<?php echo $row['UserName'] ;?>">删除</a></td>
	</tr>
	<?php
}?>
</table>
</body>
</html>