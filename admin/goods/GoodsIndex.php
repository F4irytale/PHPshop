<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
<table>
	<tr>
	<th>商品ID</th>
	<th>商品名称</th>
	<th>商品品牌</th>
	<th>商品图片</th>
	<th>商品描述</th>
	<th>商品价格</th>
	<th>商品库存</th>
	<th>商品供应商</th>
	<th>商品状态</th>
	<th>编辑</th>
	<th>删除</th>
</tr>
<?php 
$sql="select goods.* ,brand.BrandName ,supplier.SupplierName from goods,brand,supplier where goods.BrandID=brand.BrandID and goods.SupplierID=supplier.SupplierID";
$res=$mySQL->query($sql);
while($row=$res->fetch_array())
{
	?>
	<tr>
	<td><?php echo $row['GoodsID'];?></td>
	<td><?php echo $row['GoodsName'];?></td>
	<td><?php echo $row['BrandName']?></td>
	<td><img src="../../public/upload/<?php echo $row['img']?>" style="width:100px;height:100px;"></td>
	<td><?php echo $row['GoodsDescribe']?></td>
	<td><?php echo $row['GoodsPrice']?></td>
	<td><?php echo $row['GoodsStock']?></td>
	<td><?php echo $row['SupplierName']?></td>
	<td><?php echo $row['shelf']?></td>

	<td><a href="edit.php?goodsID=<?php echo $row['GoodsID'];?>">编辑</a></td>
	<td><a href="delete.php?goodsID=<?php echo $row['GoodsID'] ;?>">删除</a></td>
	</tr>
	<?php
}?>
</table>
</body>
</html>