<!DOCTYPE html>
<html>
<head>
	<title>淘金网注册</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/registe.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="hfade" style="width: 500px;
	height: 45px;
	position:absolute;
	z-index: 1;
	margin-top: 89px;
	margin-left: 79px;">
	</div>
	<div class="title">
		<!-- 标题导航 -->
		<img src="img/jinbi.png">
			<h1 style="font-size: 40px; margin-left: 200px; padding-top: 9px;" >淘金商城注册
			</h1>
		<hr>
	</div>
	<!-- 标签分页 -->
	<div class="main_body" style="margin-left:80px; width: 500px;">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#contract">用户协议</a></li>
		<li class="fade"><a href="#info">账号信息</a></li>
		<li class="fade"><a href="#address">用户地址</a></li>
		<li class="fade"><a href="#success">注册成功</a></li>
	</ul>
	<!-- 由于无法禁用链接，隐藏 -->
	
	<div class="tab-content">
		<div class="tab-pane active" id="contract">
			<!-- 协议 -->
			<div class="main_text">
				<br>
				<span class="first_title">注册协议</span><br>
				<b>【审慎阅读】</b>您在申请注册流程中点击同意前，应当认真阅读以下协议。<span class="text_line">请您务必审慎阅读、充分理解协议中相关条款内容，其中包括：</span><br>

				<span class="text_line">1、与您约定免除或限制责任的条款；</span><br>

				<span class="text_line">2、与您约定法律适用和管辖的条款；</span><br>

				<span class="text_line">3、其他以粗体下划线标识的重要条款。</span><br>

				如您对协议有任何疑问，可向平台客服咨询。<br>

				<b>【特别提示】</b>当您按照注册页面提示填写信息、阅读并同意协议且完成全部注册程序后，即表示您已充分阅读、理解并接受协议的全部内容。如您因平台服务与淘宝发生争议的，适用《淘金平台服务协议》处理。如您在使用平台服务过程中与其他用户发生争议的，依您与其他用户达成的协议处理。<br>

				<span class="text_line">阅读协议的过程中，如果您不同意相关协议或其中任何条款约定，您应立即停止注册程序。</span><br>

				<span class="text_style">淘金平台服务协议</span><br>

				<span class="text_style">隐私权政策</span><br>

				<span class="text_style">法律声明</span><br>

				<span class="text_style">轻支付及客户端服务协议</span><br>
				<button id="agreement" class="btn btn-primary">确认</button>

			</div>
			<div>
				<img src="img/rsale.png" class="rightimg0">
			</div>
		</div>
		<div class="tab-pane" id="info">
			<!-- 信息 -->
			<div>
				<img src="img/rsale2.png" class="rightimg1">
			</div>
				<form class="main_form" action="admin/insert.php" method="POST">
					<div class="form-group">
						<i class="glyphicon glyphicon-user"></i>
						<label for="nickname">昵称：</label>
						<input type="text" id="nickname" class="form-control" placeholder="请输入昵称" name="NickName">
					</div>
					<div class="form-group">
						<i class="glyphicon glyphicon-user"></i>
						<label for="username">用户名：</label>
						<input type="text" id="username" class="form-control" placeholder="请输入用户名" name="UserName">
						<span id="msg" style="color:red;"></span>
					</div>
					<div class="form-group">
						<i class="glyphicon glyphicon-comment"></i>
						<label for="telephone">手机号:</label>
						<input type="text" id="telephone" class="form-control" placeholder="请输入手机号" name="Telephone">
					</div>
					<div class="form-group">
						<i class="glyphicon glyphicon-envelope"></i>
						<label for="email">邮箱:</label>
						<input type="email" id="email" class="form-control" placeholder="请输入邮箱" name="Email">
					</div>
					<div class="form-group">
						<i class="glyphicon glyphicon-pencil"></i>
						<label for="password">密码:</label>
						<input type="password" id="password" class="form-control" placeholder="请输入密码" name="Password">
					</div>
					 <div class="form-group">
					<button id="fill" class="btn btn-primary">确认填写完毕</button>
					</div>
				</form>
			</div>
		<div class="tab-pane" id="address">
			<!-- 暂定地址 -->
			<div class="address_info">
				<form class="form-inline" action="admin/insert.php" method="POST">
					<div class="sec_form">
					 <div class="form-group">
					 	<div class="input-group">
					 		<label for="province">省份:</label>
					 		<div>
	      						<input type="text" name="province" id="province" placeholder="请输入省份" class="form-control">
	      						<div class="input-group-addon">省</div>
      						</div>
      					</div>		 	
					 </div>
					 <div class="form-group">
					 	<div class="input-group">
					 		<label for="city">市:</label>
					 		<div>
	      						<input type="text" name="city" id="city" placeholder="请输入市" class="form-control">
	      						<div class="input-group-addon">市</div>
      						</div>
      					</div>		 	
					 </div>
					 <div class="form-group">
					 	<div class="input-group">
					 		<label for="country">县:</label>
					 		<div>
	      						<input type="text" name="country" id="country" placeholder="请输入县" class="form-control">
	      						<div class="input-group-addon">县</div>
      						</div>
      					</div>		 	
					 </div>
					 <div class="form-group">
					 	<div class="input-group">
					 		<label for="village">村:</label>
					 		<div>
	      						<input type="text" name="village" id="village" placeholder="请输入村" class="form-control">
	      						<div class="input-group-addon">村</div>
      						</div>
      					</div>		 	
					 </div>
					 <div class="form-group">
					 	<div class="input-group">
					 		<label for="street">街道:</label>
					 		<div>
	      						<input type="text" name="street" id="street" placeholder="请输入街道" class="form-control">
	      						<div class="input-group-addon">街</div>
      						</div>
      					</div>		 	
					 </div>
					 <div class="form-group">
					 	<div class="input-group">
					 		<label for="other">其他:</label>
					 		<div>
	      						<input type="text" name="other" id="other" placeholder="请输入具体地址" class="form-control" style="width: 250px;" name="Address">
      						</div>
      					</div>		 	
					 </div>
					  <div class="form-group">
					  	<button id="filled" class="btn btn-primary" style="margin-top: 15px;" >确认填写完毕</button>
					  </div>	
				 </div>
	
				</form>
			</div>
			<div>
				<img src="img/rsale4.png" class="rightimg2">
			</div>
		</div>
		<div class="tab-pane" id="success">
			<!-- 成功或失败 -->
			<div >
				<img src="img/success.png" class="success_img">
				<div class="alert alert-success" role="alert">注册成功</div>
			</div>
			<div>
				<img src="img/rsale3.png" class="rightimg3">
			</div>
			<div class="form-group">
					  	<button class="btn btn-primary gb" >前往登录</button>
		    </div>			
		</div>
	</div>
	</div>
	<script type="text/javascript">
		$("#username").on('blur',function(){
	// alert("事件");
		$.ajax(
			{
				type:'POST',
				url:"checkUserName.php",
				dataType:'json',
				data:{
					username:$("#username").val()			},
				success:function(shuju){
				
					if(shuju.status==1)
					{
						$('#msg').html(shuju.message+shuju.role);
					}
					else{
		             $('#msg').html(shuju.message);
					}
				},
				error:function(jqXHR){
					alert("发生错误："+jqXHR.status);
				}
				
			});
		
		});
		$('.gb').on('click',function(e){
			window.location.href="login.php";
		});
		$('.nav li a').on('click',function(e){
			e.preventDefault();
			$(this).tab('show');
		});
		$('#agreement').on('click',function(e){
			e.preventDefault();
			$(".nav-tabs a:nth(1)").tab('show');
		});
		$('#fill').on('click',function(e){
			e.preventDefault();
			$(".nav-tabs a:nth(2)").tab('show');
		});
		$('#filled').on('click',function(e){
			e.preventDefault();
			$.ajax(
				{
					type:"post",
					url:"./admin/insert.php",
					dataType:'json',
					data:$("form").serialize(),
				// 	{
				// 	nickname:$("#nickname").val(),
				// 	username:$("#username").val()，
				// 	telephone:$("#telephone").val(),
				// 	email:$("#email").val(),
				// 	password:$("#password").val(),	
				// 	province:$("#province").val(),
				// 	city:$("#city").val(),
				// 	country:$("#country").val(),
				// 	village:$("#village").val(),
				// 	street:$("#street").val(),
				// 	other:$("#other").val()
				// }
					success:function(shuju){
						if(shuju.ayok==1)
						{
							$(".nav-tabs a:nth(3)").tab('show');
						}
						else{
			             	alert("注册失败");
						}
					},
					error:function(jqXHR){
						alert("发生错误："+jqXHR.status);
					}


				});
		});
	</script>
</body>
</html>