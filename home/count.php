<?php
session_start();
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>订单结算</title>
</head>
<script type="text/javascript" src="js/jquery.min.js"></script>
<style type="text/css">
body{
	padding: 0;
	margin: 0;
}
.top table{
	margin-left: 210px;
	color: #424242;
	font-size: 13px;
	font-family: arial;
}
.top{
	height: 23px;
	width: 1530px;
	background-color: #e0e0e0;
}
.top table tr td:hover{
	cursor:pointer;
	color: #f44336;}
.banner img{
	position: relative;
}
.ban_font{
	font-size: 30px;
	position: absolute;
	margin-left: 330px;
	margin-top: 50px;
	width: 200px;
}

}
</style>
<body>
	<div class="top">
		<table cellpadding="0" cellspacing="0">
		  <tr>
		  	<td style="width: 100px;"><a href="zhuye.php">淘金网首页</a></td>
		    <td style="width: 800px;"><a href="login.php">登陆/注册</a></td>
		    <td style="width: 90px;"><a href="geren.html">我的淘金</a></td>
		    <td style="width: 100px;"><a href="shopcar.php">我的购物车</a></td>
		    <td style="width: 80px;"><a href="orderlook.php">订单查看</a></td>
		  </tr>
		</table>
	</div>
	<div class="banner">
		<div class="ban_font">
			淘金网收银台
		</div>
		<img src="img/jinbi.png" style="width: 150px; height: 100px; margin-left: 170px;">
	</div>
	<table cellpadding="0" cellspacing="0"   style="width: 800px; text-align: center; margin-left: 350px;">
	<tr style="font-size: 20px;">
		<td style="width: 200px;"><b>商品图片</b></td>
		<td style="width: 200px;"><b>商品名称</b></td>
		<td style="width: 200px;"><b>商品数量</b></td>
		<td style="width: 200px;"><b>商品总价</b></td>
	</tr>
</table>
<br>
<hr>
<form action="over.php" method="post">
<?php 
error_reporting(E_ALL & ~E_NOTICE);
$text1=$_POST['box'];
if(($text1)==null){
	echo "<script>
	alert('请勾选商品后下单');
	location='shopcar.php'
	</script>";
}
else{
for($i=0;$i<count($text1);$i++) 
{ 
		$yourwant = $text1[$i];  
		$mySQL=new mysqli('localhost','root','','shop',3306);
		$mySQL->set_charset('utf8');
		$sql="select * from shoppingcart where id='$yourwant' AND UserName='$username'";
		$res=$mySQL->query($sql);
		while($row=$res->fetch_array())
		{
		?>
<table style="width: 800px; text-align: center; margin-left: 350px; border-bottom: 2px solid #ccc;">
	<tr>
		<td style="width: 200px;"><img src="../public/upload/<?php echo $row['img']?>" style="width: 120px; height: 120px;"></td>
		<td style="width: 200px;" ><?php echo $row['name']?></td>
		<td style="width: 200px;"><?php echo $row['num']?></td>
		<td style="width: 200px;" name="price"><?php echo $row['price']*$row['num']?></td>
		<input type="checked" checked="true" hidden="true" name="name[]" value="<?php echo $row['id']?>">
	</tr>
</table>

<?php
}
} 
}?>
<table style="width: 800px; text-align: center; margin-left: 350px";>
	<tr>
		<td style="font-size: 20px;"><b>合计:</b></td>
		<td id="ok_price"></td>
		<input type="hidden" name="over_price" id="over_price" value="">
	</tr>
</table>
<hr>
<table style="margin-left: 410px;width: 820px; ">
	<tr>
		<td></td>
		<td style="font-size: 20px"><b>
		请勾选收货地址</b>
		</td>
	</tr>
	<tr>
		<td></td>
		<td style="width: 200px;">收货地址</td>
		<td style="width: 200px;">地址名称</td>
		<td style="width: 200px;">手机号</td>
		<td style="width: 200px;">收货人</td>
		</tr>
	</table>
	
<?php
	
	$mySQL=new mysqli('localhost','root','','shop',3306);
		$mySQL->set_charset('utf8');
		$sql="select * from touch where UserName='$username'";
		$res=$mySQL->query($sql);
		while($row=$res->fetch_array())
		{
		?>
		<table style="margin-left: 410px;width: 830px;">
			<tr>
			<td><input type="radio" name="select"value="<?php echo $row['TouchID']?>"></td>
			<td style="width: 190px;"><?php echo $row['TouchAddress']?></td>
			<td style="width: 170px;"><?php echo $row['TouchName']?></td>
			<td style="width: 230px;"><?php echo $row['TouchTelephone']?></td>
			<td style="width: 200px;"><?php echo $row['UserName']?></td>
			</tr>
		</table>
<?php
}
?>
<br>
<input type="submit" name="" style="width: 100px; height: 40px; border-radius: 4px; margin-left: 410px">
</form>
<!-- <button style="width: 100px; height: 40px; border-radius: 4px; margin-left: 410px" class="tijiao" onclick="over()">提交订单</button> -->
<style type="text/css">
	.tijiao:hover{
		background-color: #66ccff;
		color: #fff;
		border:none;
	}
</style>
<script type="text/javascript">
	window.onload=function(){
		var fin_price = 0;
		var price=document.getElementsByName("price");
		for(var i=0;i<price.length;i++){
			console.log(price[i].innerHTML);
			fin_price = Number(fin_price)+Number(price[i].innerHTML);
			console.log(fin_price);
			}
			var ok_price = fin_price;
			console.log(ok_price);
		$('#ok_price').html(ok_price);
		$('#over_price').val(ok_price);


		var address=document.getElementsByName("select");
		address[0].checked = true;
	}
	// function over(){
	// 	var address = document.getElementsById('')
	// 	location.href="over.php?1";
	// }
</script>
</body>
</html>