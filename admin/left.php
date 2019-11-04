<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="public/js/jquery-2.2.3.min.js"></script>
	<style>
	div{
		display: none;
		}
	h4{
		background: #888;
		cursor: pointer;
		color: #000;
		text-align: center;
	}
	h4:hover{
		color:#fff;
	}
	p{
		padding-left: 15px;
	}
	a{
		text-decoration: none;
	}
	</style>
</head>
<body>
<h4>用户管理</h4>
 <div>
 	<p><a href="user/userIndex.php" target='right'>查看用户</a></p>
 	<p><a href="user/add.php" target='right'>添加用户</a></p>
 </div>
 <h4>分类管理</h4>
  <div>
 	<p><a href="class/classIndex.php" target='right'>查看分类</a></p>
 	<p><a href="class/add.php" target='right'>添加分类</a></p>
 </div>
 <h4>品牌管理</h4>
 <div>
 	<p><a href="brand/brandIndex.php" target='right'>查看品牌</a></p>
 	<p><a href="brand/add.php" target='right'>添加品牌</a></p>
 </div>
 <h4>商品管理</h4>
 <div>
 	<p><a href="goods/GoodsIndex.php" target='right'>查看商品</a></p>
 	<p><a href="goods/add.php" target='right'>添加商品</a></p>
 </div>
 <h4>订单管理</h4>
 <p><a href="order/orderSteats.php" target='right'>商品状态</a></p>
 <h4>评论管理</h4>
 <h4>系统管理</h4>
 <div>
 	<p><a href="modify.php" target='right'>修改密码</a></p>
 	<p><a href="logout.php" target='_top'>退出</a></p>
 </div>
</body>
</html>
<script>
	$("h4").click(function() {
		$(this).next().toggle();
		$('div').not($(this).next()).hide();
	});
</script>