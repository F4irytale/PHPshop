
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分类列表页面</title>
	<link rel="stylesheet" href="css/xiangqing.css" type="text/css">
</head>
<body>

<?php
session_start();
$username=$_SESSION['username'];
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$goods_id=$_GET['goods_id'];
$sqlGoods="select * from goods where GoodsID=$goods_id";
$resGoods=$mySQL->query($sqlGoods);
$rowGoods=$resGoods->fetch_array();
$price= $rowGoods['GoodsPrice'];
$img= $rowGoods['img'];
$name= $rowGoods['GoodsName'];
$stock= $rowGoods['GoodsStock'];
?>

	<div id="header" class="">
		 <div id="logo">
			 <a href="#"> <img src="img/tehui.png" width="1100px" height="100px"></a> 
		</div> 
		<div id="left">
            <span> 淘金商城</span>
		</div>
	</div>
	<div id="main" class="">
		<table>
			<tr>
				<th>图片</th>
				<th>姓名</th>
				<th>商品描述</th>
				<th>价格</th>
				<th>库存</th>
				<th>购物车</th>
			</tr>
			<tr>
				<td>
					<img src="../public/upload/<?php echo $rowGoods['img']?>" style="width:150px; height:150px;" alt="">
				</td>
				<td>
					<?php echo $rowGoods['GoodsName']?>
				</td>
				<td>
					<?php echo $rowGoods['GoodsDescribe']?>
				</td>
				<td>
					<?php echo $rowGoods['GoodsPrice']?>
				</td>
				<td>
					<?php echo $rowGoods['GoodsStock']?>
				</td>
				<td>
					<a href="insertcar.php?goodsid=<?php echo $goods_id?>">添加到购物车</a>
				</td>
			</tr>
				<a href="zhuye.php"><h3>返回首页</h3></a>
		</table>
	</div>
	<div class="nav">
		<span>商品评论</span>
		<?php
		  $sql="select * from comment where GoodsID=$goods_id";
            $res=$mySQL->query($sql);
			while($row=$res->fetch_array()){?>
				<table>
					<tr>
						<td><?php echo $row['UserName']?></td>
						<td><?php echo $row['Content']?></td>
						<td><?php echo $row['Cdescribe']?></td>
					</tr>
				</table>	

			<?php
			}
        ?>
	</div>
			
	<div id="footer" class="">	
		    <ul>
				<a href="#">关于我们</a>|
				<a href="#">联系我们</a>|
				<a href="#">公司信息</a>|
				<a href="#">地图</a>
			</ul>
	</div>
      	
</body>
</html>