<!DOCTYPE html>
<html >
<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			th{width: 150px;}
			.t1{width: 300px;}
			.c1{background-color: pink}
			.c2{background-color:lemonchiffon}
		</style>
</head>
<body>
<?php
session_start();
$username = $_SESSION['username'];
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
?>	
		<table cellspacing="10" frame="hsides" bordercolor="pink">
		<p>我评价过的商品</p>
		<p><a href="add.php">添加评价</a></p>
		<tr class="c1">
		<th align="left">评论ID</th>
		<th align="left">
			<select class="c2">
				<option value="1">好评</option>
				<option value="2">中评</option>
				<option value="3">差评</option>
			</select>
		</th>
		<th class="t1" align="left">我的评价</th>
		<th align="left">商品信息</th>
		<th align="center">删除</th>
	    </tr>
	<?php 
$sql="select comment.*,orders.name from comment,orders where orders.GoodsID=comment.GoodsID AND UserName='$username'";
$res=$mySQL->query($sql);
while($row=$res->fetch_array())
{
	?>

	<tr class="c1">
	<td><?php echo $row['CommentID']?></td>
	<td><?php echo $row['Cdescribe']?></td>
	<td><?php echo $row['Content']?></td>
	<td><?php echo $row['name']?></td>
	<td align="center"><a href="delete.php?commentID=<?php echo $row['CommentID'] ;?>">删除</a></td>
	</tr>
	<?php
}?>
		</table>
</body>
</html>