<?php
session_start();
$username=$_SESSION['username']
?>'
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>查看收货地址</title>
	<script src="./js/jquery-2.2.3.min.js"></script>
	<style type="text/css">
	.header{
		height: 70px;
		font: 12px Tahoma,Helvetica,Arial,'STXinwei',sans-serif;
		color:white;
		background-color: #FF4400;
		z-index: 5;
	}
	.pic{float: left;}
	.tj-logo{
		width: 140px;
		margin-left: 80px;
		float: left;margin-top:10px;
	}
	.selected{
		width: 500px;
		float: left;
		padding-left:100px;
		font-size: 25px;
		color: white;
		margin-top:18px; 
	}

	.selscted ul li ul{
		background: white;
	}
	.header ul{
		margin: 0px; padding: 0px;
	}
	.header ul li{
		height: 36px; width: 150px;
		list-style: none; float: left;
		display: inline;
		text-decoration: none;
	}
	.xialacaidan{
		width: 100px;
		z-index: 6;position: fixed;
	}
	.xialacaidan ul li{
		background-color:	GhostWhite;
	}
	.header ul li a{
		text-decoration: none;display: block;
		line-height: 36px; 

	}

	.header ul li ul{visibility: hidden;}

	.header ul li:hover ul{visibility: visible;}

	.header ul li ul a:hover{color:red ;border-bottom: 1px dashed #ff0000;}

	.search{
		width: 300px;
		/*padding-left: 80px;*/
		float: left;
		font-family: 'Microsoft YaHei';
		padding-top: 20px;}

		input{
			width: 300px; height: 30px;
			border: 1px solid white;
			float: left;}

			.left{
				width:150px;
				height:530px;
				background-color: Lavender;
				margin-left: 200px;
				margin-top: 65px;float: left;

			}
			.left li{
				list-style: none;
				font-size: 15px;
				text-align: center;
				padding-top: 7px
			}
			.left li a{text-decoration: none;}
			.left a:hover{color:orange;}
			.middle{
				width:600px;
				height:600px;
				background-color: PowderBlue;
				float: left;margin-left: 60px;margin-top: 5px;
			}
			.shouhuodz{background-color:#f3f8fe;
				width:auto;height: 30px;
				font-size: 16px;color: #014d7f;padding-left: 50px;}

				.xzadd {
					display: inline-block;
					width: auto;
					height: 26px;
					line-height: 26px;
					text-align: center;
					color: #ff5000;}

					input{
						width: 240px;
					}

					.floor{
						width: 1130px;
						height:300px;
						border:1px dashed #ccc;
						float: right;
						padding-left: 10px;
						padding-top: 10px;
					}
					.floor table{
						border: 1px dashed red;
						text-align: center;
					}
					

					</style>
				</head>
				<body>
					

					<div class="header">
						<div class="pic"><img src="../图片/jinbi.png" width="120px" height="55	px";></div>
						<div class="tj-logo">
							<span style="font-size: 35px;">我的淘金</span>
						</div>
						<div class="selected">
							<ul>
								<li style="color: white"><a href="../zhuye.php">首页</a></li>
								<li ><a href="#">账户设置▽</a>

									<div class="xialacaidan"><ul>
										<li style="color: green; font-size: 20px;">安全设置</li>
										<li style="font-size: 17px;"><a href="#">修改登陆密码</a></li>
										<li style="font-size: 17px;"><a href="#">手机绑定</a></li>
										<li style="font-size: 17px;"><a href="#">密码问题设置</a></li>
										<li style="font-size: 17px;"><a href="#">其他</a></li></li>
									<li style="color: red; font-size: 20px;">个人资料</li>
									<li style="font-size: 17px;"><a href="#">收货地址</a></li>
									<li style="font-size: 17px;"><a href="#">修改头像、昵称</a></li>
									<li style="font-size: 17px;"><a href="#">消息提醒</a></li>
								</li>
								<li style="color: blue; font-size: 20px;">账号绑定</li>
								<li style="font-size: 17px;"><a href="#">支付宝绑定</a></li>
								<li style="font-size: 17px;"><a href="#">微信绑定</a></li>
								<li style="font-size: 17px;"><a href="#">分享绑定</a></li>
							</li>
						</ul>
					</li>
					<li style="color: white;"><a href="#">消息</a></li>
				</ul> </div>

				<div class="search">
					<input type="text" name="search" placeholder="请输入关键字">
					<button style="color: white; background-color: orange; width: 50px; height:35px; cursor:pointer;">搜索</button>
				</div>
			</div>
			
</div>

			<div class="left">
				<img src="../图片/getAvatar.jpg" width="100px" height="100px"/>
				<li style="color: red;font-size:18px">账号管理</style></li>
				<li><a href="#">安全设置</a></li>
				<li><a href="../geren.html">个人资料</a></li>
				<li><a href="#">个人成长信息</a></li>
				<li><a href="#">支付宝绑定设置</a></li>
				<li><a href="#">微博绑定设置</a></li>
				<li><a href="#">个人交易信息</a></li>

				<li class="xl"><a href="address.php">收货地址 ▽</a>
					<div class="cd">
						<p><a href="address-list.php">我的收货地址</a></p>
						<p><a href="add-address.php" target="_self">添加收货地址</a></p>
					</div>
				</li>

				<li><a href="#">旺旺网页版设置</a></li>
				<li><a href="#">应用授权</a></li>
				<li><a href="#">分享绑定</a></li>
				<li><a href="#">我的评价</a></li>
			</div>

			<div class="floor">
				<table width='100%'>
					<tr>
						<th>序号</th>
						<th>用户名</th>
						<th>名称</th>
						<th>地址</th>
						<th>电话</th>
						<th>修改</th>
						<th>删除</th>
					</tr>

<?php 
$mySQL=new mysqli('localhost','root','','shop',3306);
$mySQL->set_charset('utf8');
$sql="select * from touch where UserName='$username'";
$res=$mySQL->query($sql);
while($row=$res->fetch_array())
{
	?>
	
	<tr>
	<td><?php echo $row['TouchID']?></td>
	<td><?php echo $username;?></td>
	<td><?php echo $row['TouchName']?></td>
	<td><?php echo $row['TouchAddress']?></td>
	<td><?php echo $row['TouchTelephone'];?></td>
	<td><a href="edit.php?touchID=<?php echo $row['TouchID'];?>">编辑</a></td>
	<td><a href="delete.php?touchID=<?php echo $row['TouchID'] ;?>">删除</a></td>
	</tr>
	<?php
}?>
</table>
</div>

					</body>
					</html>
					<script>
// 	$(".xl").click(function() {
// 		$(this).next().toggle();
// 		$('.cd').not($(this).next()).hide();
// 	});
// </script>