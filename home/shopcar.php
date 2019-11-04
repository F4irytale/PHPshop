<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>淘金网-购物车</title>
	<link rel="stylesheet" type="text/css" href="css/shopcar.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
		
		window.onload=function(){

			//实现全选和取消效果
			$("check").onclick=function(){
				var box=document.getElementsByName("box[]");
				if($("check").checked){
					for(var i=0;i<box.length;i++){
						box[i].checked=true;
					}
				}else{
					for(var i=0;i<box.length;i++){
						box[i].checked=false;
					}
				}
			};
			//实现当选中下面所有复选框时自动选中全选
			var box=document.getElementsByName("box[]");
			for(var i=0;i<box.length;i++){
				box[i].onclick=function(){
					//统计已选中的数量
					var count=0;
					for(var j=0;j<box.length;j++){
						if(box[j].checked){
							count++;
						}
					}
					//判断是否全部选中
					if(count==box.length){
						$("check").checked=true;
					}else{
						$("check").checked=false;
					}
				};
			}

		};

		function $(id){
			return document.getElementById(id);
		}

		function data(){
			console.log('1');
		}
	</script>
	<style type="text/css">
		/*.main:hover{
			cursor: pointer;
		}*/

		#all{
			width: 1517px;
			
		}
		.ban_font{
			width: 100px;
		}
		.good1{
			width: 20px;
			height: 20px;
		}
		.price{
			width: 50px;
			height: 50px;
		}
		#goods{
			width: 1180px;
			margin-left: 200px;
		}
		.goods_ind{
			width: 1150px;
			margin-left: 200px;
			border-bottom: 2px solid #ccc;
		}
		.cartNum{
			background-color: #ccc;
			width: 20px;
			height: 20px;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div id="all">
	<!-- 标题栏 -->
	<div class="top">
		<table cellpadding="0" cellspacing="0">
		  <tr>
		  	<td style="width: 100px;"><a href="zhuye.php">淘金网首页</a></td>
		    <td style="width: 800px;"><a href="login.php">登陆/注册</a></td>
		    <td style="width: 90px;"><a href="geren.html">我的淘金</a></td>
		    <td style="width: 100px;"><a href="shopcar.php">我的购物车</a></td>
		    <td style="width: 80px;"><a href="order/orderlook.php">订单查看</a></td>
		  </tr>
		</table>
	</div>
<!-- banner -->
	<div class="banner">
		<div class="ban_font">
			淘金网
		</div>
		<img src="img/jinbi.png" style="width: 150px; height: 100px; margin-left: 170px;">
	</div>
	<div class="ban_right">
		<form>
			<label class="sousuo">名称：</label>
			<input class="text" type="text" name="" placeholder="请输入">
			<input class="btn" type="submit" name="">
		</form>
	</div>
	<div class="main">
		<table  cellpadding="0" cellspacing="0">
			<tr >
				<td style="width: 150px;height: 30px; border-right: 1px solid black;">全部商品</a></td>
			</tr>
		</table>
		<div  style="width: 1200px; margin-left: 170px;">
			<hr>
		</div>
	</div>
	
	<div class="main_frame">
<?php
	$mySQL=new mysqli('localhost','root','','shop',3306);
	$mySQL->set_charset('utf8');
	$username = $_SESSION['username'];
?>
	<div>
		<table cellspacing="0" cellpadding="0" id="goods">
			<tr>
				<td style="width: 220px; font-size: 20px;"><input type="checkbox" style="width: 20px;
			height: 20px; " id="check" onclick="checkall()" >全选</td>
				<td style="width: 220px; font-size: 20px;">商品信息</td>
				<td style="width: 240px; font-size: 20px;">单价</td>
				<td style="width: 200px; font-size: 20px;">数量</td>
				<td style="width: 225px; font-size: 20px;">金额</td>
				<td style=" font-size: 20px;">操作</td>
			</tr>
		</table>
	</div>
	<?php 
			$sql="select * from shoppingcart where UserName='$username'";
			$res=$mySQL->query($sql);
			while($row=$res->fetch_array())
		{
		?>	
	<table class="goods_ind">
		<form action="count.php" method="post" target="_blank">
	<div class="item_1">
		<tr>
		
			<td><input type="checkbox" name="box[]" class="good1" value="<?php echo $row['id']?>"></td>
			<td><img src="../public/upload/<?php echo $row['img']?>" style="width: 120px; height: 120px;"></td>
			<td style="width: 210px;height: 100px; padding:  20px;"><a href="" style="text-decoration: none; color: black; "><div class="item_text" style="font-size: 15px;">
				<?php echo $row['name'];?></div></a>
			</td>
			<td style="width:200px; padding: 18px;">
				￥<label id="price"><?php echo $row['price'];?></label>
			</td>
			<td style="width:160px; padding: 20px;">
				<a href="removeNum.php?id=<?php echo $row['id'];?>" style="text-decoration: none; font-size: 30px;">-</a>
						<?php echo $row['num'];?>
						<a href="addNum.php?id=<?php echo $row['id'];?>" style="text-decoration: none;font-size: 25px;">+</a>
			</td>
			<td style="width:210px; padding: 20px;">
				￥<label id="price"><?php echo $row['price']*$row['num']?></label>
			</td>
			<td>
				<span><a href="delete1.php?id=<?php echo $row['id'] ;?>"style="text-decoration: none; color: black;">删除</a></span>
			</td>
		</div>
		</tr>
	</div>
	</table>
	<?php
		}?>
	<div class="bottom">
		<input type="submit" name="" value="结算" class="settle" id="settle">
		<table>
			<tr>
				
				<td style="width: 60px;font-size: 20px;" >删除</td>
			</tr>
		</table>
	</div>
	</div>
	</form>
	<script type="text/javascript">
	</script>
	</div>
</body>
</html>