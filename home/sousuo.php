<!DOCTYPE html>
<html>
<head>
	<title>淘金商城网-淘到你想要</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<style>
	table{
		width:100%;
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
	<?php
session_start();
$name=$_POST['asd'];

?>
<table>
	<tr>
	<th>商品ID</th>
	<th>商品名称</th>
	
	<th>商品图片</th>
	<th>商品描述</th>
	<th>商品价格</th>
	<th>商品库存</th>
	
	<th>商品状态</th>
	
</tr>
<?php 
$sql="select goods.*  from goods where goods.GoodsName='$name'" ;
$res=$mySQL->query($sql);

while($row=$res->fetch_array())
{
	?>
	<tr>
	<td><?php echo $row['GoodsID'];?></td>
	<td><?php echo $row['GoodsName'];?></td>
	
	<td><img src="../public/upload/<?php echo $row['img']?>" style="width:100px;height:100px;"></td>
	<td><?php echo $row['GoodsDescribe']?></td>
	<td><?php echo $row['GoodsPrice']?></td>
	<td><?php echo $row['GoodsStock']?></td>
	
	<td><?php echo $row['shelf']?></td>

	
	</tr>
	 <?php
	}?> 
</table>
	</body>
</html>