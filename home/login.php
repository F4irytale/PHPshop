<!DOCTYPE html>
<html>
<head>
	<title>淘金商城网-淘到你想要</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="title">
		<!-- 标题导航 -->
		<img src="img/jinbi.png">
			<h1 style="font-size: 40px; margin-left: 200px; padding-top: 9px;" >淘金商城
			</h1>
		<hr>
	</div>

	<img class="right_png" src="img/tehui.png">
	<div class="main_body">

	<div class="form">
		<!-- 表单组 -->
		<form  action="./admin/check.php" method='post'>
		  <div class="form-group">
		    <label for="username">用户名：</label>
		    <input type="text" class="form-control" name="username" autocomplete="off" placeholder="昵称/手机号/邮箱">
		  </div>
		  <div class="form-group">
		    <label for="password">密码：</label>
		    <input type="password" class="form-control" name="password" autocomplete="off" placeholder="密码">
		  </div>
		  <input type="submit" class="btn btn-primary dl" value="登陆">
		  <button class="btn btn-info" style="margin-left: 185px;"><a href="registe.php">
		 	现在去注册</a></button>
		</form>
	</div>
	</div>
	<hr class="bottom">
	<div>
</div>
<!-- 底部信息 -->
	<div class="foot">
		<label><a href="#">关于淘金</a></label>&nbsp;
		<label><a href="#">联系我们</a></label>&nbsp;
		<label><a href="#">诚聘英才</a></label>&nbsp;
		<label><a href="#">401Studio</a></label>&nbsp;
		<div><label><a href="">Powered by digitalocean</a></label></div>

		<div><a href="http://beian.miit.gov.cn/state/outPortal/loginPortal.action">冀ICP备18021728号</a></div>
			<div>©2019&nbsp;淘金商城&nbsp;&nbsp;版权所有</div>
	</div>
		<script type="text/javascript">
	// 	$('.dl').click(function(){
	// 	var username=document.getElementById('username').value;
	// 	var password=document.getElementById('password').value;
		
	// 	window.location.href='check.php?username='+username+"&password="+password;
	// });
			// 检测用户名输入是否为空
			$('#username').on('focus',function(){
			if($('#username').val()==''){
				$('#username').tooltip({
					placement:'right',
					trigger:'manual', 
					title:'用户名不能为空',
				}).tooltip('show').on('keyup',function(){
					if($('#username').val()!=''){
						$('#username').tooltip('hide');
					}
				})
				
			}
			else{
				$('#username').tooltip('hide');
				
			}
		});
			//检测密码输入是否为空
			$('#password').on('focus',function(){
			if($('#password').val()==''){
				$('#password').tooltip({
					placement:'right',
					trigger:'manual', 
					title:'密码不能为空',
				}).tooltip('show').on('keyup',function(){
					if($('#password').val()!=''){
						$('#password').tooltip('hide');
					}
				})
				
			}
			else{
				$('#password').tooltip('hide');
				
			}
		});

			$('#password').on('keyup',function()
			{
				check();
			})
			// 检测均为空
			function check(){
				if($('#username').val()==''||$('#password').val()==''){
					$('#login').attr("disabled", true);
				}
				else{
					$("#login").removeAttr("disabled");
				}
			}
			check();
		</script>
	</body>
</html>