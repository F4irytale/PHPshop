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
	<th>分类ID</th>
	<th>分类名称</th>
	<th>分类描述</th>
	<th>编辑</th>
	<th>删除</th>
</tr>
<?php 
$sql="select * from class";
$res=$mySQL->query($sql);
while($row=$res->fetch_array())
{
	?>
	<tr>
	<td><?php echo $row['ClassID'];?></td>
	<td><?php echo $row['ClassName']?></td>
	<td><?php echo $row['ClassDescribe']?></td>
	<td><a href="edit.php?classID=<?php echo $row['ClassID'];?>">编辑</a></td>
	<td><a href="delete.php?classID=<?php echo $row['ClassID'] ;?>">删除</a></td>
	</tr>
	<?php
}?>
</table>
</body>
</html>